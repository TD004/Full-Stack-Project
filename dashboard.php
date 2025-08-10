<?php
session_start();
include 'includes/db_connect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];

// Fetch user ID
$uidStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$uidStmt->bind_param("s", $user);
$uidStmt->execute();
$uidResult = $uidStmt->get_result();
$uid = $uidResult->fetch_assoc()['id'];

// Fetch data for chart
$query = $conn->query("SELECT heart_rate, log_time FROM health_logs WHERE user_id = $uid ORDER BY log_time ASC");
$chartLabels = '';
$chartData = '';
while ($row = $query->fetch_assoc()) {
    $chartLabels .= '"' . date("d M", strtotime($row['log_time'])) . '",';
    $chartData .= $row['heart_rate'] . ',';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - HealthMate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      background: #f1f1f1;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #00b894;
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
    }
    .card {
      border-radius: 16px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.02);
    }
    .chart-container {
      display: none;
      background: white;
      padding: 30px;
      margin-top: 30px;
      border-radius: 16px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg px-3">
  <a class="navbar-brand" href="#">HealthMate</a>
  <div class="ms-auto">
   
    <a class="nav-link d-inline" href="doctor_locator.php">Find Doctor</a>
    <a class="nav-link d-inline" href="logout.php">Logout</a>
  </div>
</nav>

<div class="container mt-5">
  <h2 class="text-center mb-4">Welcome, <?php echo htmlspecialchars($user); ?> 👋</h2>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card p-4 text-center">
        <h5>Heart Rate Trends</h5>
        <button class="btn btn-outline-success mt-3" onclick="toggleChart()">View Chart</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-4 text-center">
        <h5>Add New Log</h5>
        <a href="health_log.php" class="btn btn-outline-primary mt-3">Add Log</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-4 text-center">
        <h5>Locate Doctors</h5>
        <a href="doctor_locator.php" class="btn btn-outline-info mt-3">Find Doctor</a>
      </div>
    </div>
  </div>

  <div class="chart-container" id="chartContainer">
    <h4 class="text-center mb-4">📊 Heart Rate Over Time</h4>
    <canvas id="heartRateChart" height="100"></canvas>
  </div>
</div>

<script>
function toggleChart() {
  const container = document.getElementById('chartContainer');
  container.style.display = container.style.display === 'none' ? 'block' : 'none';
}

const ctx = document.getElementById('heartRateChart').getContext('2d');
const heartRateChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php echo $chartLabels; ?>],
        datasets: [{
            label: 'Heart Rate (bpm)',
            data: [<?php echo $chartData; ?>],
            backgroundColor: 'rgba(0, 206, 201, 0.2)',
            borderColor: 'rgba(0, 206, 201, 1)',
            borderWidth: 2,
            tension: 0.3,
            fill: true
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false,
                title: {
                    display: true,
                    text: 'Heart Rate (bpm)'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Date'
                }
            }
        }
    }
});
</script>

</body>
</html>
s
