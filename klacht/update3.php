<html>
<head>
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

// gegevens uit de array in variabelen stoppen
$Id = $_POST["Id"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];
$naam = $_POST["naam"];
$email = $_POST["email"];
$datum = $_POST["datum"];
$klachtOmschrijving = $_POST["klachtOmschrijving"];
$extraDetail = $_POST["extraDetail"];
$image = $_POST["image"];
$wijken_Id = $_POST["wijken_Id"];
$opmerking = $_POST["opmerking"];
$status_Id = $_POST["status"];


//  object ---------------------------------------------------
$klacht = new klacht($naam, $email, $datum, $klachtOmschrijving, $extraDetail, $image, $longitude, $latitude, $wijken_Id, $status_Id, $opmerking,); //  object
$klacht->update($Id);		           // changes the tableinfo and object info
echo "This is the updated information: <br/>";
echo $Id ."<br/>";
$klacht->afdrukken();
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
