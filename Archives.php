<?php
include "dbconnection.php"; //Calls connection to local database


session_start();


//Basically checks if the session is the same credentials entered, if its incorrect it will redirect the user to the Login page. 
$username = ($_SESSION['admin']);
if (!isset($_SESSION['admin'])) header('location: Login.php');
$username = $_SESSION['admin'];



$query = "SELECT * FROM archive_products";

$archive = mysqli_query($conne, $query);

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
    <title>Archives</title>
</head>


<body>
    <div class="navbar-container">
        <?php include "Parts/Navbar.php"; ?>

    </div>

    <div class="sidebar-container">

        <?php include "Parts/Sidebar.php"; ?>
    </div>

    <div class="Main-content">
        <!-- Start Archives Content -->
        <div class="row">
            <div class="col">
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
                                    <th scope="col">Date_archived</th>
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
                                    <td><?php echo $row['date_archived'] ?></td>

                            </tr>
                        <?php
                                }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Archives -->

    </div>

</body>
<!-- <script src="JScripts/No-reload-script.js"></script> -->

</html>