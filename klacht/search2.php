<!DOCTYPE html>
<html lang="nl">
<head>
    <!--shiano william-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<div>
    <?php
    require "klacht.php";
    $id = $_POST["id"];
    $klacht = new klacht();
    $klacht->search($id);
    ?>
</div>
</body>
</html>

