<?php
    //Maak een pdo database connectie
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "am1b_2015_loginregistration";
    
    $conn = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>