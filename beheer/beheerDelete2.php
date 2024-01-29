<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="navigatie">
    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam"/>
        <a href="../login/UI.php">Go Back To Manage</a>
        <a href="../geolocation/map.php">Map</a>
        <a href="../index.php">Home</a>
    </nav>
</div>
    <?php
    require "beheer.php";
    $id = $_POST["idField"];
    $beheer1 = new beheer();
    $beheer1->searchBeheer($id);
    ?>
        <form action="beheerDelete3.php" method="post">
            <!-- $id cant be changed -->
            <input type="hidden" name="idField" value=" <?php echo $id ?> ">
            <!-- 2x deleteBox  -->
            <input type="hidden" name="deleteBox" value="nee">
            <input type="checkbox" name="deleteBox" value="ja">
            <label for="deleteBox">Delete this user.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
<footer>
    <div class="footer_rotterdam">
        Gemeente <br> Rotterdam
    </div>
    <div class="contact">
        <a href="../files_andere/contact.html">Contact</a>
    </div>
</footer>
</html>
