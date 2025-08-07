<?php
session_start();
include 'includes/db.php';
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $symptom = $_POST["symptom"];
    $response = "Possible cause: ";
    if (strpos(strtolower($symptom), "cough") !== false) {
        $response .= "Common Cold or COVID-19.";
    } elseif (strpos(strtolower($symptom), "headache") !== false) {
        $response .= "Migraine or Stress.";
    } else {
        $response .= "Consult a doctor for diagnosis.";
    }
    echo "<p>$response</p>";
}
?>
<form method="POST">
    Enter your symptom: <input type="text" name="symptom" required><br>
    <button type="submit">Check</button>
</form>