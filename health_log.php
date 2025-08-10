<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Health Log</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            background: #28a745;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type=submit]:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New Health Log</h2>
    <form method="POST" action="add_log_backend.php">
        <label for="heart_rate">Heart Rate (bpm):</label>
        <input type="number" name="heart_rate" required>

        <label for="symptoms">Symptoms:</label>
        <textarea name="symptoms" rows="4" required></textarea>

        <input type="submit" value="Submit Log">
    </form>
</div>

</body>
</html>
