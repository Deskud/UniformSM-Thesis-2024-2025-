<?php
include "dbconnection.php"; //Calls connection to local database
$query = "SELECT * FROM archive_products";

$archive = mysqli_query($conne, $query);

?>

<!-- Start Archives Content -->
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="Archives">
            <div class="card card-body">
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
                                while ($row = mysqli_fetch_assoc($archive)) {
                                ?>
                                    <td><?php echo $row['ID'] ?></td>
                                    <td><?php echo $row['Product'] ?></td>
                                    <td><?php echo $row['Gender'] ?></td>
                                    <td><?php echo $row['Size'] ?></td>
                                    <td><?php echo $row['Price'] ?></td>
                                    <td><?php echo $row['Quantity'] ?></td>
                            </tr>
                        <?php
                                }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Archives -->