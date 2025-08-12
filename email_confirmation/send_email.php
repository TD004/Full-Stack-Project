<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function sendConfirmationEmail($to, $token) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'you@example.com'; // Replace with your email
        $mail->Password   = 'password'; // Replace with your password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('you@example.com', 'HealthMate');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = 'Confirm your HealthMate Registration';
        $mail->Body    = "Click <a href='http://localhost/HealthMate/email_confirmation/verify.php?token=$token'>here</a> to confirm your registration.";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
