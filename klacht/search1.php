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
        <a href="login/login.php">login</a>
        <a href="../klacht/create1.php">Klachten</a>
        <a href="geolocation/map.php">Kaart</a>
    </nav>
</div>

<form action="search2.php" method="post">
    <label for="id">id:</label>
    <input type="text" id="id" name="id">
    <input type="submit">
    <br>
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