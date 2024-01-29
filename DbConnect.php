<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$dbname = "p10";
$username = "root";
<<<<<<< Updated upstream
$DBpassword = "root";
=======
$password = "root";
>>>>>>> Stashed changes

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $error){
    echo "connection failed" . $error->getMessage();
}

