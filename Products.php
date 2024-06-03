<?php
  session_start()


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

<nav  id="Navbar-bootstrap" class="shadow-lg navbar bg-body-tertiary text" style="background-color: #0454ac;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="Styles/BGpics/PCU Logo.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
    Uniform Stock Monitoring System
    </a>
    <a class="navbar-logout" href="Logout.php" >
      <i class="fa-solid fa-right-from-bracket"></i>
    Sign out
    </a>
  </div>
</nav>

<!-- End Navbar -->

<!-- Sidebar -->

<div id="Sidebar-bootstrap" class="shadow-sm d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary bg-dark" style="width: 280px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">
        <!-- <?=$user['usern_name'] ?> -->
        Admin
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
        <a href="Purchase.php" class="nav-link text-white">
        <i class="fa-solid fa-arrow-trend-up"></i>
          Purchase History
        </a>
      </li>
      <li>
        <a href="#" class="nav-link active">
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

<!-- Crud template temp -->
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Product</th>
            <th>Size</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Gender</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>PE Uniform</td>
            <td>Large</td>
						<td>P350.00</td>
						<td>20</td>
						<td>Female</td>
						<td>
            <a href="#" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a>
						<a href="#" class="delete" data-toggle="modal"><i class="fa-solid fa-trash"></i></a>
            <a href="#" class="archive" data-toggle="modal"><i class="fa-solid fa-box-archive"></i></a>

				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Crud end -->



</body>
</html>
