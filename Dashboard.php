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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/883b8ee9d9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Styles/Stylings.css">
  <title>Dashboard</title>
</head>

<body>

  <!-- Navigation bar -->

  <nav class="shadow-lg navbar" style="background-color: #0454ac;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Styles/BGpics/PCU Logo.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
        <span style="color: white;">Uniform Stock Monitoring System</span>
      </a>
    </div>
  </nav>

  <!-- End Navbar -->

  <!-- Sidebar start -->
  <div id="Sidebar-bootstrap" class="shadow-sm d-flex flex-column flex-shrink-0 p-3 text-bg-dark side d-none d-md-block col" style="width: 270px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">

        <!-- Shows the name of the user based on the username of the user -->
        <?= $_SESSION['admin']; ?>
      </span>
    </a>
    <hr>
    <ul id="sidebar-main">
      <ul class="nav nav-pills flex-column mb-auto">

        <a href="Dashboard.php" class="nav-link text-white" data-target="Dashboard.php" onclick="loadDash()">
          <i class="fa-solid fa-gauge"></i>
          Dashboard
        </a>
        </li>
        <li>
          <a href="Purchase.php" class="nav-link text-white" data-target="Purchase.php" onclick="loadPurchase()">
            <i class="fa-solid fa-arrow-trend-up"></i>
            Purchase History
          </a>
        </li>
        <li>
          <a href="Products.php" class="nav-link text-white" data-target="Products.php" onclick="loadProduct()">
            <i class="fa-solid fa-shirt"></i>
            Products
          </a>
        </li>
        <li>
          <a href="QR.php" class="nav-link text-white" data-target="QR.php" onclick="loadQR()">
            <i class="fa-solid fa-qrcode"></i>
            QR Code
          </a>
        </li>
      </ul>
    </ul>
    <hr>
    <div class="sidebar-footer">
      <a class="sidebar-logout" href="Logout.php">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Sign out</span>
      </a>
    </div>
  </div>
  <!-- Side bar end -->

  <div class="Pages-main-container">
    <div class="Main-content">
      <!-- Dashboard Table  -->
      <?php include "Parts/Dashboard-table.php"; ?>

    </div>
  </div>
</body>
<script>

  //Temporary "no full page reload"
  // $(document).ready(function() {
  //   var trigger = $('#sidebar-main ul li a'),
  //     container = $('.Main-content');
  //   trigger.on('click', function() {
  //     var $this = $(this),
  //       target = $this.data('target');
  //     console.log(target);
  //     container.load(target);

  //     return false;
  //   });
  // });

  // Temporary single page reload it works but needs improvement
  // Problema lang ay kapag nag ne-next page sa products nawawala yung css at shits. Fixing it next commit 
  $(document).ready(function() {
    var trigger = $('#sidebar-main ul li a'),
      container = $('.Main-content');

    trigger.on('click', function() {
      var $this = $(this),
        target = $this.data('target'),
        newUrl = target;

      $.ajax({
        url: target,
        success: function(data) {
          container.html(data); // 
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error loading content:", textStatus, errorThrown);
        }
      });

      window.history.pushState({}, "", newUrl);


      return false;
    });
  });

</script>
</html>