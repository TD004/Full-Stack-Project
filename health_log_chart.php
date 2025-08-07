<?php
session_start();
include 'includes/db.php';
$user = $_SESSION["user"];
$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email='$user'"))['id'];

$data = mysqli_query($conn, "SELECT log_date, water_intake, sleep_hours FROM health_logs WHERE user_id=$uid ORDER BY log_date DESC LIMIT 7");
$dates = $water = $sleep = [];
while ($row = mysqli_fetch_assoc($data)) {
    $dates[] = $row["log_date"];
    $water[] = $row["water_intake"];
    $sleep[] = $row["sleep_hours"];
}
?>
<canvas id="healthChart" width="600" height="300"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('healthChart').getContext('2d');
const chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode(array_reverse($dates)); ?>,
        datasets: [{
            label: 'Water Intake (ml)',
            data: <?php echo json_encode(array_reverse($water)); ?>,
            borderColor: 'blue',
            fill: false
        },
        {
            label: 'Sleep Hours',
            data: <?php echo json_encode(array_reverse($sleep)); ?>,
            borderColor: 'green',
            fill: false
        }]
    }
});
</script>