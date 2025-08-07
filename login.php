<?php
session_start();
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 1) {
        $_SESSION["user"] = $email;
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials.";
    }
}
?>
<form method="POST">
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>