<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../gemeenteStyle.css">
</head>
<body>
<div class="navigatie">
    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam"/>
        <a href="../index.php">Home</a>
        <a href="../geolocation/map.php">Map</a>
        <a href="../login/UI.php">Go Back To Manage</a>
    </nav>
</div>

<?php
require "klacht.php";


// uitlezen vakjes van KlantenCreate1 -----
$naam = $_POST["naam"];
$email = $_POST["email"];
$datum = $_POST["datum"];
$klachtOmschrijving = $_POST["klachtOmschrijving"];
$extraDetail = $_POST["extraDetail"];
$image = $_POST["image"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];
$wijken_Id = $_POST["wijken_Id"];
$status_Id = $_POST["status_Id"];


// maken object -------------------------------
$klacht = new klacht($naam, $email, $datum, $klachtOmschrijving, $extraDetail, $image, $longitude, $latitude, $wijken_Id, $status_Id,);
$klacht->create();

// afdrukken object ---------------------------

?>
</body>
<footer>
    <div class="footer_rotterdam">
        Gemeente <br> Rotterdam
    </div>
    <div class="contact">
        <a href="../files_andere/contact.html">Contact</a>
    </div>
</footer>
</html>

