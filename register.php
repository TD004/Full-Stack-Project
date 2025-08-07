<?php
include 'includes/db.php';
include 'email_confirmation/send_email.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $token = bin2hex(random_bytes(16));

    $query = "INSERT INTO users (email, password, token, verified) VALUES ('$email', '$password', '$token', 0)";
    if (mysqli_query($conn, $query)) {
        sendConfirmationEmail($email, $token);
        echo "Registration successful! Check your email to verify your account.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<form method="POST">
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>