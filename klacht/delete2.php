
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
require "klacht.php";
$Id = $_POST["Id"];
$klacht = new klacht();
$klacht->search($Id);
?>

<form action="delete3.php" method="post">
    <input type="hidden" name="Id" value=" <?php echo $Id ?> ">
    <!-- 2x verwijderBox om nee of ja door te kunnen geven -->
    <input type="hidden" name="deleteBox" value="nee">
    <input type="checkbox" name="deleteBox" value="ja">
    <label for="deleteBox">verwijder klacht</label><br/><br/>
    <input type="submit"><br/><br/>
</form>
</body>
</html>
