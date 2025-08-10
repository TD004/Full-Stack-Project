<?php
include("includes/db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user (without is_verified)
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Registered successfully'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('❌ Error: Email already exists or server issue'); window.location.href='register.php';</script>";
    }
}
?>
