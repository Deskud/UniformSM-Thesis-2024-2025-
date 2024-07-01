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

        <a href="Dashboard.php" class="nav-link text-white" data-target="Dashboard.php">
          <i class="fa-solid fa-gauge"></i>
          Dashboard
        </a>
        </li>
        <li>
          <a href="Purchase.php" class="nav-link text-white" data-target="Purchase.php">
            <i class="fa-solid fa-arrow-trend-up"></i>
            Purchase History
          </a>
        </li>
        <li>
          <a href="Products.php" class="nav-link text-white" data-target="Products.php" >
            <i class="fa-solid fa-shirt"></i>
            Products
          </a>
        </li>
        <li>
          <a href="QR.php" class="nav-link text-white" data-target="QR.php" >
            <i class="fa-solid fa-qrcode"></i>
            QR Code
          </a>
        </li>
        <li>
          <a href="Archives.php" class="nav-link text-white" data-target="Archives.php" >
          <i class="fa-solid fa-box-archive"></i>
            Archive
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
