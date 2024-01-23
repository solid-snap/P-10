<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- shiano william -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title> <!-- Add a title for your webpage -->
</head>
<body>

<?php
require "klacht.php"; // necessary to make an object

// Check if Id is set in the POST data
$Id = isset($_POST["Id"]) ? $_POST["Id"] : null;

$klacht = new klacht(); // making the object
$klacht->search($Id);

// properties in variables
$wijken_Id = $klacht->get_wijken_Id();
$status_Id = $klacht->get_status_Id();
$klachtOmschrijving = $klacht->get_klachtOmschrijving();
$extraDetail = $klacht->get_extraDetail();
$image = $klacht->get_image();
$naam = $klacht->get_naam();
$email = $klacht->get_email();
$datum = $klacht->get_Datum();
$opmerking = $klacht->get_opmerking();
$latitude = $klacht->get_latitude();
$longitude = $klacht->get_longitude();

// Fetch status data
$select_status = $conn->prepare("SELECT * FROM status");
$select_status->execute();
$status = $select_status->fetchAll();

// Fetch wijk data
$select_wijk = $conn->prepare("SELECT * FROM wijk");
$select_wijk->execute();
$wijk = $select_wijk->fetchAll();
?>

<form action="update3.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $Id; ?>"><br>
    <input type="hidden" name="longitude" value="<?php echo $longitude; ?>"><br>
    <input type="hidden" name="latitude" value="<?php echo $latitude; ?>"><br>
    <input type="text" name="naam" value="<?php echo $naam; ?>"><br>
    <input type="text" name="email" value="<?php echo $email; ?>"><br>
    <input type="date" name="datum" value="<?php echo $datum; ?>"><br>
    <input type="text" name="klachtOmschrijving" value="<?php echo $klachtOmschrijving; ?>"><br>
    <input type="text" name="extraDetail" value="<?php echo $extraDetail; ?>"><br>
    <input type="text" name="image" value="<?php echo $image; ?>"><br>
    <select id="wijken_Id" name="wijken_Id">
        <?php
        foreach ($wijk as $wijken) {
            echo "<option value=" . $wijken['id'] . ">" . $wijken['naam'] . "</option>";
        }
        ?>
    </select><br>

    <label for="opmerking">opmerking:</label>
    <input type="text" id="opmerking" name="opmerking"><br>

    <select id="status" name="status">
        <?php
        foreach ($status as $st) {
            echo "<option value=" . $st['id'] . ">" . $st['naam'] . "</option>";
        }
        ?>
    </select>
    <input type="submit"><br>
</form>

</body>
</html>
