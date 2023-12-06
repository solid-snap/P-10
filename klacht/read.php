<!DOCTYPE html>
<html lang="nl">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
require "klacht.php";
$klacht1 = new klacht();
$klacht1->read();
?>
</body>
</html>