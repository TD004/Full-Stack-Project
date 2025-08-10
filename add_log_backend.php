<?php
session_start();
include("includes/db_connect.php");

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_SESSION["user"];
    $heart_rate = $_POST["heart_rate"];
    $symptoms = $_POST["symptoms"];

    // Fetch user ID
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $user_id = $user["id"];

    // Insert log
    $stmt = $conn->prepare("INSERT INTO health_logs (user_id, heart_rate, symptoms, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iis", $user_id, $heart_rate, $symptoms);
    
    if ($stmt->execute()) {
        echo "<script>alert('✅ Health log added successfully.'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('❌ Failed to add log.'); window.location.href='health_log.php';</script>";
    }
}
?>
