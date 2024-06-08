<?php
  session_start();

  
  $username = ($_SESSION['admin']);
  if(!isset($_SESSION['admin'])) header('location: Login.php');
  $username = $_SESSION['admin'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/883b8ee9d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/Stylings.css">
    <title>Dashboard</title>
</head>
<body class="Dashboard-main">
  
<!-- Navigation bar -->

<?php include "Parts/NavigationBar.php";?>

<!-- End Navbar -->



<!-- Sidebar -->

<div id="Sidebar-bootstrap" class="shadow-sm d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary bg-dark" style="width: 280px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">
        <?= $_SESSION['admin'];?>
        </span>
    </a>
<hr>
<ul class="nav nav-pills flex-column mb-auto">

        <a href="Dashboard.php" class="nav-link text-white" aria-current="page">
        <i class="fa-solid fa-gauge"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="Purchase.php" class="nav-link active">
        <i class="fa-solid fa-arrow-trend-up"></i>
          Purchase History
        </a>
      </li>
      <li>
        <a href="Products.php" class="nav-link text-white">
        <i class="fa-solid fa-shirt"></i>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
        <i class="fa-solid fa-qrcode"></i>
          QR Code
        </a>
    </ul>
  </div>

<!-- End Sidebar -->





<!--Export button download -->
<div class="Button-modifier">
    <button class="btn"><i class="fa-solid fa-file-excel"></i>
    <span> Export to Excel</span>
    </button>
</div>

<!--Export button download end-->


<!-- Dashboard Table  -->

<table class="table table-bordered" style="width: 50%;">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Size</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
    <td>PE Uniform </td>
    <td>Large </td>
    <td>P350.00 </td>
    <td>20 </td>
  <tbody>
  
  </tbody>
</table>


<!-- End Dashboard Table -->


<!-- Page Search -->
<nav aria-label="Search results pages">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<!-- End Page Search -->



</body>
</html>