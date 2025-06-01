<?php
// DATABASE CONFIG
$host = "localhost";
$user = "root";          // change if different
$password = "";          // change if set
$dbname = "pioneer_travel"; // use your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submit
if (isset($_POST['subscribe'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Check if valid email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Check if already subscribed
    $check = $conn->prepare("SELECT * FROM subscriptions WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "You are already subscribed.";
    } else {
        // Insert new subscription
        $stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            echo "Thanks for subscribing!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $check->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
