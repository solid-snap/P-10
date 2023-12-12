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
    <div class="topnav" id="myTopNav">
        <form action="beheerDelete3.php" method="post">
            <!-- $id cant be changed -->
            <input type="hidden" name="idField" value=" <?php echo $id ?> ">
            <!-- 2x deleteBox  -->
            <input type="hidden" name="deleteBox" value="nee">
            <input type="checkbox" name="deleteBox" value="ja">
            <label for="deleteBox">Delete this user.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
    </div>
</div>
<footer>  </footer>
</html>
