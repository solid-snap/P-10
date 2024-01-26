<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="../login/login.php" class="active">go back to login</a></h2>
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
</div>
</body>
<footer> ? </footer>
</html>
