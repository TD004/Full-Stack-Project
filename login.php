
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - HealthMate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      font-family: 'Inter', sans-serif;
    }
    .login-box {
      max-width: 400px;
      margin: 100px auto;
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      padding: 30px;
      animation: slideUp 0.7s ease-out;
    }
    @keyframes slideUp {
      from {transform: translateY(30px); opacity: 0;}
      to {transform: translateY(0); opacity: 1;}
    }
  </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<div class="login-box">
  <h3 class="text-center text-primary mb-4">Login to HealthMate</h3>
  <form method="POST" action="login_backend.php">
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" name="email" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-4">
      <input type="password" class="form-control" id="floatingPassword" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
    <p class="text-center mt-3">
      Don't have an account? <a href="register.php">Register</a>
    </p>
  </form>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
