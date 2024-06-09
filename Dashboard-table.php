<?php
include "dbconnection.php";

$query = "SELECT * FROM products";
$result = mysqli_query($conne, $query);

?>
<div class="container-xl">
  <div class="table-responsive">
    <table class="table table-bordered col-xl">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Product</th>
          <th scope="col">Size</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <td><?php echo $row['ID'] ?></td>
          <td><?php echo $row['Product'] ?></td>
          <td><?php echo $row['Size'] ?></td>
          <td><?php echo $row['Price'] ?></td>
          <td><?php echo $row['Quantity'] ?></td>
          <td><?php echo $row['Gender'] ?></td>
      </tr>
    <?php
        }
    ?>
    </table>
  </div>
</div>