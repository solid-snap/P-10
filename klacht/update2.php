<!DOCTYPE html>
<html lang="nl">
<head>
    <!--shiano william-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


        <?php

        require "klacht.php";					// neccessary to make an object
        $Id = $_POST["Id"];
        $klacht = new klacht();				// making the object
        $klacht->search($Id);

        // properties in variables
        $wijk = $klacht->get_wijken_Id();
        $status = $klacht->get_status_Id();
        $omschrijving = $klacht->get_klachtOmschrijving();
        $detail = $klacht->get_extraDetail();
        $image = $klacht->get_image();
        $naam = $klacht->get_naam();
        $email = $klacht->get_email();
        $datum = $klacht->get_Datum();
        $opmerking = $klacht->get_opmerking();

        ?>

        <?php
        $username = "root";
        $password = "root";
        try {
            $conn = new PDO("mysql:host=localhost;dbname=p10",$username, $password);

        }catch (PDOException $error){
            echo $error->getMessage();
        }

        try {
            $select_status= $conn->prepare("SELECT * FROM status");
            $select_status->execute();
            $status=$select_status->fetchAll();
        }catch (PDOException $error){
            echo $error->getMessage();
        }

        ?>

        <form action="update3.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $Id;?>"><br>
            <select id="status" name="status" >

                <?php
                foreach($status as $st) {
                    echo " <option value=" .  $st['naam'] . ">" . $st['naam']. "</option>";

                }

                ?>

            </select>
            <input type="submit"><br>

        </form>

</html>
