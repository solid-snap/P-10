<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="../login/login.php" class="active">go back to login</a></h2>
    </div>
    <?php
    require "beheer.php";
    $id = $_POST["idField"];
    $beheer1 = new beheer();
    $beheer1->searchBeheer($id);
    ?>
</div>
</body>
<footer>  </footer>
</html>
