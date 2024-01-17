<!DOCTYPE html>
<html lang="nl">
<head>
    <!--shiano william-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
        require "klacht.php";
        // info from the array into the variables
        $Id = $_POST["Id"];
        $st = $_POST["status"];


        // making an object ---------------------------------------------------
        $klacht = new klacht($Id, $st); // makes object
        $klacht->update($Id);		           // changes the tableinfo voor objectinfo
        echo ". <br/>";
        echo $Id ."<br/>";
        $klacht->afdrukken();	                       // drukt object af

        ?>
    </body>
</html>


