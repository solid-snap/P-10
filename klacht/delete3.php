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
$delete = $_POST["deleteBox"];

if ($delete == "ja") {
    $klacht = new klacht();
    $klacht->delete($Id);
} else {
}
?>
</body>
</html>
