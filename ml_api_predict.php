<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $symptom = $_POST['symptom'];
    $data = json_encode(["symptom" => $symptom]);

    $ch = curl_init("https://dummy-ml-api.com/predict");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    $response = curl_exec($ch);
    curl_close($ch);

    echo "AI Prediction: " . $response;
}
?>
<form method="POST">
    Symptom: <input type="text" name="symptom"><br>
    <button type="submit">Get AI Prediction</button>
</form>