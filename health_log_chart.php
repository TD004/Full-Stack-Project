<!-- health_log_chart.php -->
<?php include 'includes/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Health Logs - HealthMate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      background-color: #f4f6f8;
      font-family: 'Inter', sans-serif;
    }
    .chart-box {
      max-width: 800px;
      margin: 60px auto;
      background: #fff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
  </style>
</head>
<body>

<div class="chart-box text-center">
  <h3 class="mb-4">📊 Your Health Logs</h3>
  <select id="chartType" class="form-select mb-4 w-50 mx-auto">
    <option value="line">Line Chart</option>
    <option value="bar">Bar Chart</option>
  </select>
  <canvas id="healthChart" height="100"></canvas>
</div>

<script>
  const ctx = document.getElementById('healthChart').getContext('2d');
  let chart;

  const chartData = {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [
      {
        label: 'Water Intake (litres)',
        data: [2.0, 2.5, 1.8, 2.2, 2.0, 2.4, 2.1],
        backgroundColor: '#4fc3f7',
        borderColor: '#0288d1',
        fill: true
      },
      {
        label: 'Sleep (hrs)',
        data: [6, 7, 5, 8, 6, 7.5, 7],
        backgroundColor: '#aed581',
        borderColor: '#689f38',
        fill: true
      }
    ]
  };

  function renderChart(type) {
    if (chart) chart.destroy();
    chart = new Chart(ctx, {
      type: type,
      data: chartData,
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  }

  renderChart('line');
  document.getElementById('chartType').addEventListener('change', (e) => {
    renderChart(e.target.value);
  });
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
