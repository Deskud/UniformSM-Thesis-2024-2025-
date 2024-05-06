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

    
    <title>Uniform-Stocks</title>
</head>
<body id="Login-Logout">
        <img src="Styles/BGpics/PCU Logo.png" class="pculogo">

        <div class="LoginContainer">
            <form action="Login.php" class="LoginBox" method="post">
                    <h3>Login to your account</h3>
                    
                    <div class="Login-content">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Email" name= "email">
                    </div>

                    <div class="Login-content">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>

                    <div class="Login-checkbox">
                        <input type="checkbox" name="remember">  Remember me
                        
                    </div>

                    <div class="Login-Button-content">
                        <button class="Login-Button">Login <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
            </form>
        </div>
        <div class="Login-footer">
            Powered by COI
            <img src="Styles/BGpics/COI Logo.png">
            <img src="Styles/BGpics/ComSoc Logo.png">
        </div>
</body>
</html>
