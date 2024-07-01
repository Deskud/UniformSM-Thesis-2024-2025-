<?php

include "dbconnection.php"; //Calls connection to local database

session_start();


//Basically checks if the session is the same credentials entered, if its incorrect it will redirect the user to the Login page. 
$username = ($_SESSION['admin']);
if (!isset($_SESSION['admin'])) header('location: Login.php');
$username = $_SESSION['admin'];



//Adds the product
if (isset($_POST['Add'])) {

    //Uses the name of the input (input type ="text" name = "size")
    $product_name = $_POST['name'];
    $product_size = $_POST['size'];
    $product_price = $_POST['price'];
    $product_quant = $_POST['quantity'];
    $product_gend = $_POST['gend'];

    //Database table name = products in products 5 rows: Product, Size, Price, Quantity, and  Gender
    $insertdata = "INSERT INTO products (Product, Gender, Size, Price, Quantity) 
                VALUES('$product_name', '$product_gend', '$product_size', '$product_price', '$product_quant')";

    $addproducts = mysqli_query($conne, $insertdata);
    if ($addproducts) {
        echo "Success";
    } else {
        echo "OOF";
    }
};
//Automatically archvied the data once deleted
if (isset($_GET['delete'])) {

    $idget = $_GET['delete'];

    //Select the data from the main table )products)
    $selectData = mysqli_query($conne, "SELECT * FROM products WHERE ID = $idget");

    //Fetch the data based on the ID
    $data = mysqli_fetch_assoc($selectData);


    //If the data is fetched insert into the archive_products table then delete data on the main table
    if ($data) {

        $archivedata = "INSERT INTO archive_products (ID, Product, Size, Price, Quantity, Gender)
        VALUES('$data[ID]','$data[Product]', '$data[Size]', '$data[Price]', '$data[Quantity]', '$data[Gender]')";
        mysqli_query($conne, $archivedata);

        mysqli_query($conne, "DELETE FROM products WHERE ID = $idget");
        header('location:Products.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/883b8ee9d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/Stylings.css">
    <title>Products</title>
</head>

<body>
    <div class="navbar-container">
        <?php include "Parts/Navbar.php"; ?>

    </div>

    <div class="sidebar-container">

        <?php include "Parts/Sidebar.php"; ?>
    </div>

    <div class="Main-content">
        <!-- Add Products Button -->
        <p class="d-inline-flex gap-1">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#AddProducts" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa-solid fa-plus"></i> Add Products</a>
        </p>

        <!-- Add Product Content -->
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="AddProducts">
                    <div class="card card-body">
                        <div class=Product-container>
                            <div class="AddProd">
                                <form action="" method="post" enctype='multipart/form-data'>
                                    <h6>Add Products</h6>
                                    <select class="boxprod" name="name">
                                        <option selected>Select Uniform Type</option>
                                        <option value="School Uniform">School Uniform</option>
                                        <option value="Pants">Pants</option>
                                        <option value="PE Shirt">PE Shirt</option>
                                        <option value="Jogging Pants">Jogging Pants</option>
                                        <option value="College Shirt">College Shirt</option>
                                    </select>

                                    <select class="selectsize" name="size">
                                        <option selected>Select Uniform Size</option>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                        <option value="Extra Large">Extra Large</option>
                                    </select>
                                    <input type="number" placeholder="Enter Price" name="price" class="boxprice">
                                    <input type="number" placeholder="Enter Quantity" name="quantity" class="boxquantity">
                                    <select class="selectsize" name="gend">
                                        <option selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <input type="submit" name="Add" class="Addbutton" value="Add Product">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Products Content -->
        <?php include "Parts/Products-table.php"; ?>

    </div>

</body>

</html>