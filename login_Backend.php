<?php
session_start();
include("includes/db_connect.php"); // Make sure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch user from database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Optional: check if user is verified (if you use email verification)
        if ($row['verified'] != 1) {
            echo "<script>alert('⚠️ Email not verified yet.'); window.location.href='login.php';</script>";
            exit();
        }

        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION["user"] = $row["email"];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('❌ Incorrect password'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('❌ User not found'); window.location.href='login.php';</script>";
    }
}
?>
