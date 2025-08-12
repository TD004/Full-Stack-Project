<?php
include '../includes/db.php';
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $query = "UPDATE users SET verified=1 WHERE token='$token'";
    if (mysqli_query($conn, $query)) {
        echo "Email verified. You can now login.";
    } else {
        echo "Invalid or expired token.";
    }
}
?>