<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="navigatie">
    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam" />
        <a href="../login/login.php">login</a>
        <a href="../geolocation/map.php">Kaart</a>
        <a href="../index.php">Home</a>
    </nav>
</div>
<?php
require "klacht.php";
$Id = $_POST["Id"];
$klacht = new klacht();
$klacht->search($Id);
?>

<form action="delete3.php" method="post">
    <input type="hidden" name="Id" value=" <?php echo $Id ?> ">
    <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
    <input type="hidden" name="deleteBox" value="nee">
    <input type="checkbox" name="deleteBox" value="ja">
    <label for="deleteBox">verwijder klacht</label><br/><br/>
    <input type="submit"><br/><br/>
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
