<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
    <div class="navigatie">
        <nav>
            <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam" />
            <a href="../login/login.php" class="active">Go Back To Login</a>
        </nav>
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