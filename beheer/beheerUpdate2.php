<?php

?>
<!doctype html>
<html>

<head>
    <title>Update beheer Formulier 2</title>
</head>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="../login/login.php" class="active">go back to login</a></h2>
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


</div>
</body>
<footer> </footer>
</html>
