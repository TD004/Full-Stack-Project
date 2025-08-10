<?php include 'includes/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Find Doctors - HealthMate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #e3f2fd;
    }
    .doc-card {
      border: none;
      box-shadow: 0 5px 10px rgba(0,0,0,0.05);
      border-radius: 12px;
      transition: all 0.3s ease;
    }
    .doc-card:hover {
      transform: translateY(-4px);
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h3 class="text-center mb-4">📍 Find Nearby Doctors</h3>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card doc-card p-3">
        <h5>Dr. Anjali Verma</h5>
        <p class="text-muted">General Physician</p>
        <p><strong>Location:</strong> Sector 21, Delhi</p>
        <a href="tel:+911234567890" class="btn btn-outline-primary w-100">Contact</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card doc-card p-3">
        <h5>Dr. Rohan Mehta</h5>
        <p class="text-muted">Dermatologist</p>
        <p><strong>Location:</strong> Saket, New Delhi</p>
        <a href="tel:+911234567891" class="btn btn-outline-primary w-100">Contact</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card doc-card p-3">
        <h5>Dr. Priya Sharma</h5>
        <p class="text-muted">Pediatrician</p>
        <p><strong>Location:</strong> Gurgaon</p>
        <a href="tel:+911234567892" class="btn btn-outline-primary w-100">Contact</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
