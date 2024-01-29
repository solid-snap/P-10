<!doctype html>
<html>
<!-- -->
<head>
    <title>Update beheer Formulier 3</title>
</head>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="navigatie">
    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam"/>
        <a href="../index.php">Home</a>
        <a href="../geolocation/map.php">Map</a>
        <a href="../login/UI.php">Go Back To Manage</a>
    </nav>
</div>
    <h1>Update beheer Formulier 3</h1>
    <?php
    require "beheer.php";
    // gegevens uit de array in variabelen stoppen
    $id = $_POST["idField"];
    $username = $_POST["usernameField"];
    $password = $_POST["passwordField"];

    //  object ---------------------------------------------------
    $beheer1 = new beheer($username, $password); //  object
    $beheer1->updateBeheer($id);		           // changes the tableinfo and object info
    echo "This is the updated information: <br/>";
    echo $id ."<br/>";
    $beheer1->afdrukken();	                       // prints objects

    ?>
</body>
<footer>
    <div class="footer_rotterdam">
        Gemeente <br> Rotterdam
    </div>
    <div class="contact">
        <a href="files_andere/contact.html">Contact</a>
    </div>
</footer>
</html>
