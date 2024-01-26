<!doctype html>
<html>
<!-- -->
<head>
    <title>Update beheer Formulier 3</title>
</head>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="../login/login.php" class="active">go back to login</a></h2>
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
</div>
</body>
<footer>  </footer>
</html>
