<?php

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
<body class="Main-body">
    
    <div class="Dash-top">
        <img src="Styles/BGpics/PCU Logo.png">
        <a href="Login.php" id="Logout"><i class="fa-solid fa-arrow-right-from-bracket">  Logout</i></a>
        <a href="Dash-usr"><i class="fa-regular fa-user">  Username</i></a>
        


    </div>
    
    <div class="Dash-side">
            <ul class="Dash-side-lists">
                <li>
                   <a href="Dashboard.php"><i class="fa-solid fa-gauge "></i><span class="menuText"> Dashboard</span></a>
                </li>
                <li>
                    <a href="Purchase.php"><i class="fa-solid fa-arrow-trend-up"></i><span class="menuText" > Purchase History</span></a>
                </li>
                <li >
                    <a href="Products.php"><i class="fa-solid fa-shirt"></i><span class="menuText" > Products</span></a>
                </li>
                <li >
                    <a href="QR_Gen.php"><i class="fa-solid fa-qrcode"></i><span class="menuText" > QR Code</span></a>
                </li>
                
            </ul>

    </div>
</body>
</html>