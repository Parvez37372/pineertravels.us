<?php
include("db.php"); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Password match check
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match'); window.location.href='register.php';</script>";
        exit();
    }

    // Check if username or email already exists
    $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Username or Email already exists'); window.location.href='register.php';</script>";
        exit();
    }

    // Insert user into database
    $sql = "INSERT INTO users (fullname, email, username, password) 
            VALUES ('$fullname', '$email', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful! Please login'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error occurred while registering'); window.location.href='register.php';</script>";
    }
} else {
    header("Location: register.php");
    exit();
}
?>
