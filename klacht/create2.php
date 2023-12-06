<!DOCTYPE html>
<html lang="nl">
<head>
    <!--shiano william-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../uI/donkeyStyle.css">
</head>
<body>

<div class="navbar">
    <a href="../uI/index.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Account</button>
        <div class="dropdown-content">
            <a href="../login/klantLogin.php">Inloggen</a>
            <a href="../klant/create1.php">Account aanmaken</a>
        </div>
    </div>
    <a href="../uI/boeken.html">Boeken</a>
    <a href="../uI/routes.html">Route</a>
    <a href="../uI/overOns.html">Over ons</a>
</div>
        <?php
        require "boeking.php";

        // uitlezen vakjes van KlantenCreate1 -----
        $route=$_POST["route"];
        $klant=$_POST["klant"];
        $datum=$_POST["datum"];
        $start=$_POST["start"];
        $eind=$_POST["eind"];

        // maken object -------------------------------
        $boeking = new boeking($route, $klant, $datum, $start, $eind);
        $boeking->create();

        // afdrukken object ---------------------------

        $boeking->afdrukken();
        ?>
<footer>
    <a href="../klant/klant.html">temp klant</a>
</footer>
    </body>
</html>

