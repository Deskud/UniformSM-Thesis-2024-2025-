<?php

include "dbconnection.php"; //Calls connection to local database

session_start();


//Basically checks if the session is the same credentials entered, if its incorrect it will redirect the user to the Login page. 
$username = ($_SESSION['admin']);
if (!isset($_SESSION['admin'])) header('location: Login.php');
$username = $_SESSION['admin'];


$idgetupdate = $_GET['edit'];

if (isset($_POST['Edit'])) {
    $product_name = $_POST['name'];
    $product_size = $_POST['size'];
    $product_price = $_POST['price'];
    $product_quant = $_POST['quantity'];
    $product_gend = $_POST['gend'];


    if(empty($product_name)|| empty($product_size)|| empty($product_price)|| empty($product_quant)|| empty($product_gend)){
        echo "Please fill out the following.";
    }
    else{
        
        $updateData = "UPDATE products SET Product = '$product_name',  Gender ='$product_gend',  Size = '$product_size', Price = '$product_price', Quantity = '$product_quant' WHERE ID = $idgetupdate";

        $productUpdated = mysqli_query($conne, $updateData);
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
    <title>Update Products</title>
</head>

<body>
    <div class=Product_container>
        <div class="AddProd">
            <form action="" method="post" enctype='multipart/form-data'>
                <h6>Update Products</h6>
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
                <input type="submit" name="Edit" class="Addbutton" value="Update Product">
                <a href="/uniformsm/Products.php" class="GoBack"><i class="fa-solid fa-arrow-left"></i></a>

            </form>

        </div>
    </div>
</body>

</html>