<?php

include "dbconnection.php"; //Calls connection to local database

?>

<!-- Add Products Button -->
<p class="d-inline-flex gap-1">
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#AddProducts" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa-solid fa-plus"></i> Add Products</a>
</p>
<!-- Archives Button -->
<p class="d-inline-flex gap-1">
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#Archives" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa-solid fa-box-archive"></i> Archives</a>
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
                                <option value="Male Uniform">Male Uniform</option>
                                <option value="Female Uniform">Female Uniform</option>
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

                            <input type="submit" name="Add" class="Addbutton" value="Add Product">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Add Products Content -->

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
                                    <th>Product Name</th>
                                    <th>Date Archived</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Archives -->

<?php include "Parts/Products-table.php"; ?>