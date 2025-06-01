<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match'); window.location.href='register.php';</script>";
        exit();
    }

    $check_sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $check_result = $stmt->get_result();

    if ($check_result->num_rows > 0) {
        echo "<script>alert('Username or Email already exists'); window.location.href='register.php';</script>";
        exit();
    }

    // ✅ HASH the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $insert_sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_sql);
    $stmt->bind_param("ssss", $fullname, $email, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Please login'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error while registering'); window.location.href='register.php';</script>";
    }

    $stmt->close();
}
?>
