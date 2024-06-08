<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";


    $conne = new mysqli($servername, $username, $password, $dbname);

    if(!$conne){
        echo "Connection FAILED!";
    }
   

?>
