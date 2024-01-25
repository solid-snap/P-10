<?php
require "../DbConnect.php";
require "klacht.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        var_dump($_POST);
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

        // Create an instance of the klacht class
        $klacht = new klacht($naam, $email, $datum, $klachtOmschrijving, $extraDetail, $image, $longitude, $latitude, $wijken_Id, $status_Id, $opmerking,);

        // Update the record
        $klacht->update($Id);

        echo "Update successful!";
    } catch (PDOException $e) {
        echo "Update failed: " . $e->getMessage();
    }
} else {
    // Redirect if accessed directly without POST request
    header("Location: index.php"); // Replace with the appropriate redirection URL
    exit();
}
?>