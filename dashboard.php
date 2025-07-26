<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Work Dekho</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f1f3f6;
    }

    .navbar {
      background-color: #2e8bff;
      padding: 15px 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    .navbar .logo {
      font-size: 22px;
      font-weight: bold;
    }

    .navbar .nav-links a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: 500;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }

    .welcome {
      font-size: 26px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    .dashboard-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.06);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card i {
      font-size: 28px;
      color: #2e8bff;
      margin-bottom: 10px;
    }

    .card h3 {
      margin: 10px 0;
      font-size: 18px;
      color: #222;
    }

    .card p {
      color: #555;
    }

    .logout-btn {
      background: #ff4d4d;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      display: inline-block;
      margin-top: 30px;
    }

    .logout-btn:hover {
      background: #e63939;
    }

    @media screen and (max-width: 600px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }
      .navbar .nav-links {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">Work Dekho</div>
    <div class="nav-links">
      <a href="dashboard.php">Dashboard</a>
      <a href="viewprofile.php">Profile</a>
      <a href="services.html">Services</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>

  <div class="container">
    <div class="welcome">Welcome back, <?php echo htmlspecialchars($name); ?>!</div>

    <div class="dashboard-grid">
      <div class="card">
        <i class="fas fa-briefcase"></i>
        <h3>Browse Projects</h3>
        <p>Explore available projects and start bidding.</p>
      </div>

      <div class="card">
        <i class="fas fa-upload"></i>
        <h3>Post a Service</h3>
        <p>Offer your services and let clients find you.</p>
      </div>

      <div class="card">
        <i class="fas fa-check-circle"></i>
        <h3>My Applications</h3>
        <p>View the jobs you’ve applied for or posted.</p>
      </div>

      <div class="card">
        <i class="fas fa-user-edit"></i>
        <h3>Edit Profile</h3>
        <p>Update your skills, bio, and personal information.</p>
      </div>
      <a href="service_list.php" class="card-link">
  <div class="card">
    <h3>📋 My Posted Services</h3>
    <p>View the services you’ve posted</p>
  </div>
</a>

    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
  </div>

</body>
</html>
