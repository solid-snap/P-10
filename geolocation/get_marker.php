<?php
<<<<<<< Updated upstream
require "../DbConnect.php";
global $conn;
=======

require "../DbConnect.php";
global $conn;

>>>>>>> Stashed changes
$get_markers = $conn->prepare("SELECT * FROM klacht");
$get_markers->execute();
$markers = $get_markers->fetchAll();

//Zorg ervoor dat de response in json wordt geplaatst
$encoded_data = json_encode($markers);
