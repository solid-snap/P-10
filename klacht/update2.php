<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- shiano william -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../gemeenteStyle.css">
    <title>Your Page Title</title> <!-- Add a title for your webpage -->
    <!-- Add JavaScript script -->
    <script>
        // Function to check if klacht is older than two weeks
        function checkKlachtDate() {
            var currentDate = new Date();
            var klachtDate = new Date("<?php echo date('Y/m/d', strtotime($datum)); ?>"); // Assuming $datum contains the klacht date in yy/mm/dd format

            // Calculate the difference in milliseconds
            var timeDifference = currentDate - klachtDate;

            // Convert milliseconds to days
            var daysDifference = timeDifference / (1000 * 60 * 60 * 24);

            // Check if the klacht is older than two weeks (14 days)
            if (daysDifference > 14) {
                alert("deze klacht is ouder dan 2 weken!\nCurrent Date: " + currentDate + "\nKlacht Date: " + klachtDate);
            }
        }

        // Call the function when the page is loaded
        window.onload = checkKlachtDate;
    </script>
</head>
<body>
<div class="navigatie">
    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam"/>
        <a href="login/login.php">login</a>
        <a href="../klacht/create1.php">Klachten</a>
        <a href="geolocation/map.php">Kaart</a>
    </nav>
</div>
<?php
require "klacht.php"; // n
//
//ecessary to make an object

// Check if Id is set in the POST data
// Check if id is set in the POST data
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
global $conn;
$select_status = $conn->prepare("SELECT * FROM status");
$select_status->execute();
$status = $select_status->fetchAll();

// Fetch wijk data
$select_wijk = $conn->prepare("SELECT * FROM wijk");
$select_wijk->execute();
$wijk = $select_wijk->fetchAll();

?>

<form action="update3.php" method="post">
    <input type="hidden" name="Id" value="<?php echo strip_tags("$Id <br>"); ?>"><br>
    <input type="hidden" name="longitude" value="<?php echo strip_tags("$longitude <br>"); ?>"><br>
    <input type="hidden" name="latitude" value="<?php echo strip_tags("$latitude <br>"); ?>"><br>
    <input type="text" name="naam" value="<?php echo strip_tags("$naam <br>"); ?>"><br>
    <input type="text" name="email" value="<?php echo strip_tags("$email <br>"); ?>"><br>
    <input type="text" name="datum" value="<?php echo strip_tags("$datum <br>"); ?>"><br>
    <input type="text" name="klachtOmschrijving" value="<?php echo strip_tags("$klachtOmschrijving <br>"); ?>"><br>
    <input type="text" name="extraDetail" value="<?php echo strip_tags("$extraDetail <br>"); ?>"><br>
    <input type="text" name="image" value="<?php echo strip_tags("$image <br>"); ?>"><br>
    <select id="wijken_Id" name="wijken_Id">
        <?php
        foreach ($wijk as $wijken) {
            echo "<option value=" . $wijken['Id'] . ">" . $wijken['naam'] . "</option>";
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
<footer>
    <div class="footer_rotterdam">
        Gemeente <br> Rotterdam
    </div>
    <div class="contact">
        <a href="../files_andere/contact.html">Contact</a>
    </div>
</footer>
</html>
