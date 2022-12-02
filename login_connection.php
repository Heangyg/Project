<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $db = "db_login";
    $con = new mysqli($servername, $username, $password, $db);

    if($con->connect_error){
        die("Connection faild: ".$con->connect_error);
    }
    echo "";
?>