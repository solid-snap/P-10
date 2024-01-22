<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
 require "klacht.php";


// uitlezen vakjes van KlantenCreate1 -----
$naam = $_POST["naam"];
$email = $_POST["email"];
$datum = $_POST ["datum"];
$klachtOmschrijving = $_POST["klachtOmschrijving"];
$extraDetail =$_POST["extraDetail"];
$image = $_POST["image"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];
$status_Id = $_POST["status_Id"];
$wijken_Id = $_POST["wijken_Id"];





// maken object -------------------------------
$klacht = new klacht($naam, $email,$datum, $klachtOmschrijving, $extraDetail, $image, $longitude, $latitude, $wijken_Id, $status_Id);
$klacht->create();

// afdrukken object ---------------------------

?>
</body>
</html>

