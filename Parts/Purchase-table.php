<?php


$query = "SELECT * FROM purchase_history";
$records = mysqli_query($conne, $query);


?>

<div class="container-xl">
    <div class="table-responsive">
        <table class="table table-bordered col-xl">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Products Purchased</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Bill Given</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($records)) {
                ?>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['purchase_date'] ?></td>
                    <td><?php echo $row['purchased_products'] ?></td>
                    <td><?php echo $row['purchase_quantity'] ?></td>
                    <td><?php echo $row['given_bill'] ?></td>
                    <td><?php echo $row['grand_total'] ?></td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</div>