<?php
    include "dbconnection.php";

    session_start();
    


    if(isset($_POST['submit'])){
        $username = $_POST['user'];//name of the username input is "user"
        $password = $_POST['pass'];//name of the password input is "pass"

        //selects db table name (user_admin) where columns (user_name and password) is checked if the same as the user input
        $sql = "SELECT * from user_admin where user_name = '$username' && password = '$password'"; 

        $result = mysqli_query($conne, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        //basically verifies if the connection to the database is correct (right credentials). After that it will redirect user to the Dashboard.php
        if($count==1){
           $_SESSION['admin'] = $username;
            header("Location: Dashboard.php");
        }
        else{

            //Show alert message if credentials input does not exist on the database.
            echo'<script>
                    alert("These credentials do not match our records.");
                </script>';
        }
    }
   
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
            <form name="form" action="Login.php" class="LoginBox" onsubmit="return isvalid()" method="post">
                    <h3>Login to your account</h3>
                    
                    <div class="Login-content">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Username" name= "user">
                    </div>

                    <div class="Login-content">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="pass">
                    </div>

                    <!-- <div class="Login-checkbox">
                        <input type="checkbox" name="remember">  Remember me
                        
                    </div> -->

                    <div class="Login-Button-content">
                        <input type="submit" class="Login-Button" value="Login" name="submit">
                    </div>
            </form>
        </div>
        <script>

            //Show alert messages if user and pass is empty or both are empty.


            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("Enter Credentials");
                    return false
                }
                else{
                    if(user.length==""){
                    alert("Enter Username");
                    return false
                }
                if(pass.length==""){
                    alert("Enter Password");
                    return false
                }
            }
        }
        </script>

     
</body>
</html>
