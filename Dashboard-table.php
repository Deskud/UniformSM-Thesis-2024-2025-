<!-- 

Reference for pagination
https://www.youtube.com/watch?v=7dQAv0icVGk 


-->
<?php
include "dbconnection.php"; //Calls connection to local database

// $query = "SELECT * FROM products"; //Selects the table name



//PAGINATION start


if (isset($_GET['page_no']) && $_GET['page_no'] !== "") {
  $page_no = $_GET['page_no'];
} else {
  $page_no = 1;
}

//Total records to display in the table
$total_records_per_page = 10;

//Page offset
$offset = ($page_no - 1) * $total_records_per_page;

//Next Page
$next_page = $page_no + 1;
//Previous Page
$previous_page = $page_no - 1;

//Total Count of records
$result_record_count = mysqli_query($conne, "SELECT COUNT(*) as total_records FROM products");

//Total records
$records = mysqli_fetch_assoc($result_record_count);

$total_records = $records['total_records'];

// PHP math -Ceil function rounds the number up to the nearest integer. Float value result.
//related to the number of data 
$total_no_of_pages = ceil($total_records / $total_records_per_page);






//---Query---


// Limits the page to display. In this case the limit is 10 per page (change if needed). 
//Offset means it can show the rest of the data but its limited on what page number the user is in (hirap i explain)
$query = "SELECT * FROM products LIMIT $offset, $total_records_per_page";

$result = mysqli_query($conne, $query);

//Pagination End
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
  <!-- Page Search -->
  <nav aria-label="Search results pages">
    <ul class="pagination justify-content-center">
      <div class="pagination">
        <li class="page-item">
          <a class="page-link <?= ($page_no <= 1) ? 'disabled' : ''; ?>" <?= ($page_no > 1) ? 'href=?page_no=' . $previous_page : ''; ?>>Previous</a>
        </li>


        <?php
        // Counts how many pages to display based on the data on the database
        for ($counter = 1; $counter <= $total_no_of_pages; $counter++) { ?>
          <?php if ($page_no != $counter) { ?>

          
            <li class="page-item"><a class="page-link" href="?page_no=<?= $counter; ?>"><?= $counter; ?></a></li>
          <?php } else { ?>
            
            <!-- Highlights current page number -->
            <li class="page-item"><a class="page-link active"><?= $counter; ?></a></li>

          <?php } ?>

        <?php } ?>





        <li class="page-item">
          <a class="page-link <?= ($page_no >= $total_no_of_pages) ? 'disabled' : ''; ?>" <?= ($page_no < $total_no_of_pages) ? 'href=?page_no=' . $next_page : ''; ?>>Next</a>
        </li>
      </div>
    </ul>
  </nav>
  <div class="page-info">
    <strong>Page <?= $page_no; ?> of <?= $total_no_of_pages; ?></p>
  </div>
</div>