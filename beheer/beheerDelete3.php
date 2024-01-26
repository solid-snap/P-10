<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="../login/login.php" class="active">go back to shows</a></h2>
    </div>
    <?php
    require "beheer.php";

    $id = $_POST["idField"];
    $delete = $_POST["deleteBox"];

    if ($delete == "ja") {
        echo "This user has been deleted <br/>";
        $beheer1 = new beheer();
        $beheer1->deleteBeheer($id);
    } else {
        echo "This user hasn't been deleted. <br/>";
    }
    ?>
</div>

</body>
<footer>  </footer>
</html>