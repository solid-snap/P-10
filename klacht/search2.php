<!DOCTYPE html>
<html lang="nl">
<head>
    <!--shiano william-->
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


<div>
    <?php
    require "klacht.php";
    $id = $_POST["id"];
    $klacht = new klacht();
    $klacht->search($id);
    ?>
</div>
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

