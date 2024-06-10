<?php
session_start();


//Basically checks if the session is the same credentials entered, if its incorrect it will redirect the user to the Login page. 
$username = ($_SESSION['admin']);
if (!isset($_SESSION['admin'])) header('location: Login.php');
$username = $_SESSION['admin'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/883b8ee9d9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Styles/Stylings.css">
  <title>Dashboard</title>
</head>

<body class="Pages-main-container">

  <!-- Navigation bar -->
  <?php include "Parts/NavigationBar.php"; ?>

  <!-- Sidebar -->
  <div id="Sidebar-bootstrap" class="shadow-sm d-flex flex-column flex-shrink-0 p-3 text-bg-dark side d-none d-md-block col" style="width: 270px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">

        <!-- Shows the name of the user based on the username of the user -->
        <?= $_SESSION['admin']; ?>
      </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

      <a href="#" class="nav-link active" aria-current="page">
        <i class="fa-solid fa-gauge"></i>
        Dashboard
      </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="fa-solid fa-arrow-trend-up"></i>
          Purchase History
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="fa-solid fa-shirt"></i>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="fa-solid fa-qrcode"></i>
          QR Code
        </a>
      </li>
      <hr>
      <div class="sidebar-footer">
        <a class="sidebar-logout" href="Logout.php">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Sign out</span>
        </a>
      </div>
    </ul>
  </div>
  <div class="Main-content">
    <div class="dashboard-content">

      <!-- Dashboard Table  -->
      <?php include "Dashboard-table.php"; ?>
    </div>
  </div>


</body>

</html>