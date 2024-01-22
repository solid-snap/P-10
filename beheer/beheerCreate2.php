<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="navigatie">

    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam" />
        <a href="../login/login.php"> Go back to Login</a>
    </nav>
</div>
    <?php
    require "beheer.php";
    $username=$_POST["usernameField"];
    $password=$_POST["passwordField"];

    $gehashed = password_hash($password, null);
    $password =$gehashed;

    // maken object -------------------------------
    $beheer1 = new beheer($username, $password);
    $beheer1->createBeheer();

    // afdrukken object ---------------------------

    ?>
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
