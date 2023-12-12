<?php
$dbnaam = "p10";
$username = "root";
$password = "root";
try{
    $conn = new PDO("mysql:host=localhost;dbname=$dbnaam",$username, $password);
}catch(PDOexception $error){
    echo $error->getMessage();
}

$get_markers = $conn->prepare("SELECT * FROM klacht");
$get_markers->execute();
$markers = $get_markers->fetchAll();

//Zorg ervoor dat de response in json wordt geplaatst
echo json_encode($markers);
