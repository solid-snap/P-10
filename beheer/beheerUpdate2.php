<!doctype html>
<html>

<head>
    <title>Update beheer Formulier 2</title>
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
    <h1>Update beheer Formulier 2</h1>
    <?php

    require "beheer.php";                    // needed to make an object
    $id = $_POST["idField"];
    $beheer1 = new beheer();                // makes object
    $beheer1->searchBeheer($id);

    // properties in variables
    $username = $beheer1->get_username();
    $password = $beheer1->get_password();
    ?>

    <form action="beheerUpdate3.php" method="post">
        <!-- $id cant be changed -->
        <input type="hidden" name="idField" value="<?php echo $id;?>"><br>
        <input type="text"   name="usernameField"      value="<?=$username;?>"><br>
        <input type="text"   name="passwordField"  value="<?php echo $password;  ?> "><br>
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
