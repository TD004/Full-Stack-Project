<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>
<h2>Welcome, <?php echo $_SESSION["user"]; ?>!</h2>
<ul>
    <li><a href="symptom_checker.php">Symptom Checker</a></li>
    <li><a href="health_log.php">Daily Health Log</a></li>
    <li><a href="doctor_locator.php">Find Doctors Nearby</a></li>
    <li><a href="diet_tips.php">Diet & Exercise Tips</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>