<?php
require "../DbConnect.php";
global $conn;
$get_markers = $conn->prepare("SELECT * FROM klacht");
$get_markers->execute();
$markers = $get_markers->fetchAll();

//Zorg ervoor dat de response in json wordt geplaatst
echo json_encode($markers);
