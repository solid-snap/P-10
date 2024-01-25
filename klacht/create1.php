<!DOCTYPE html>
<?php
require "../DbConnect.php";
$select_wijk = $conn->prepare("SELECT * FROM wijk ");
$select_wijk->execute();
$wijken = $select_wijk->fetchAll();

$select_status = $conn->prepare("SELECT * FROM status where id=1");
$select_status->execute();
$status = $select_status->fetchAll();
?>

<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klachtenformulier</title>
    <link rel="stylesheet" href="../gemeenteStyle.css">
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
<form action="create2.php" method="post">
    <label for="naam">naam:</label>
    <input type="text" id="naam" name="naam"><br>

    <label for="email">email:</label>
    <input type="text" id="email" name="email"><br>

    <label for="datum">datum:</label>
    <input type="date" id="datum" name="datum"><br>

    <label for="klachtOmschrijving">klacht Omschrijving:</label>
    <input type="text" id="klachtOmschrijving" name="klachtOmschrijving"><br>

    <label for="extraDetail">extra Detail:</label>
    <input type="text" id="extraDetail" name="extraDetail"><br>

    <label for="image">upload foto:</label>
    <input type="file" id="image" name="image" accept="image/*"><br>


    <input type="hidden" name="longitude" id="longitude">
    <input type="hidden" name="latitude" id="latitude">
    <label for="wijken_Id">wijk:</label>
    <select id="wijken_Id" name="wijken_Id">
        <?php
        foreach ($wijken as $wijk) {
            echo " <option value=" . $wijk['Id'] . ">" . $wijk['naam'] . "</option>";
        }
        ?>
    </select>
    <input type="hidden" name="status_Id" value="<?php foreach ($status as $status_Id) {
        echo $status_Id['id'];
    } ?>">

    <input type="submit" value="verzenden">
    <script>
        const successCallback = (position) => {
            console.log(position.coords.longitude);
            console.log(position.coords.latitude);
            document.getElementById("longitude").value = position.coords.longitude
            document.getElementById("latitude").value = position.coords.latitude
        }
        const errorCallback = (error) => {
            console.log(error);
        };
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    </script>
    <?php if (isset($_FILES['image'])) {
        $uploadDirectory = 'uploads/';
        $uploadedFile = $_FILES['image']['tmp_name'];
        $uploadedFileName = $_FILES['image']['name'];
        $targetPath = $uploadDirectory . $uploadedFileName;
        if (move_uploaded_file($uploadedFile, $targetPath)) {
            echo 'Image uploaded successfully.';
        } else {
            echo 'Error uploading image.';
        }
    } ?>
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
