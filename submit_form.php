<?php
// submit_form.php

// 1. Read JSON input
$data = json_decode(file_get_contents("php://input"), true);

// 2. Connect to MySQL
$conn = new mysqli("localhost", "root", "", "flight_booking"); // user, password, db_name

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

// 3. Extract booking data
$tripType = $conn->real_escape_string($data['tripType']);
$from = $conn->real_escape_string($data['from']);
$to = $conn->real_escape_string($data['to']);
$date = $conn->real_escape_string($data['date']);
$returnFrom = $conn->real_escape_string($data['returnFrom']);
$returnTo = $conn->real_escape_string($data['returnTo']);
$returnDate = $conn->real_escape_string($data['returnDate']);
$adult = (int)$data['passengers']['adult'];
$child = (int)$data['passengers']['child'];
$infant = (int)$data['passengers']['infant'];
$travelClass = $conn->real_escape_string($data['passengers']['travelClass']);

// 4. Insert into bookings table
$sql = "INSERT INTO bookings (trip_type, from_city, to_city, departure_date, return_from, return_to, return_date, adults, children, infants, travel_class) 
        VALUES ('$tripType', '$from', '$to', '$date', '$returnFrom', '$returnTo', '$returnDate', $adult, $child, $infant, '$travelClass')";

if ($conn->query($sql) === TRUE) {
    $booking_id = $conn->insert_id;

    // 5. Insert multi-city segments if applicable
    if ($tripType === 'multicity' && !empty($data['multiCity'])) {
        foreach ($data['multiCity'] as $segment) {
            $cityFrom = $conn->real_escape_string($segment['from']);
            $cityTo = $conn->real_escape_string($segment['to']);
            $cityDate = $conn->real_escape_string($segment['date']);

            $multiSql = "INSERT INTO multicity_segments (booking_id, from_city, to_city, travel_date)
                         VALUES ($booking_id, '$cityFrom', '$cityTo', '$cityDate')";

            if (!$conn->query($multiSql)) {
                echo json_encode(["success" => false, "message" => "Multi-City insert failed: " . $conn->error]);
                $conn->close();
                exit;
            }
        }
    }

    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $conn->error]);
}

$conn->close();
?>
