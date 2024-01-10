<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

        <?php
        require "klacht.php";

        // uitlezen vakjes van KlantenCreate1 -----
        $naam=$_POST["naam"];
        $email=$_POST["email"];
        $wijk=$_POST["wijk"];
        $datum=$_POST["datum"];
        $naamklacht=$_POST["naamklacht"];
        $omschrijving=$_POST["omschrijving"];
        $foto=$_POST["foto"];
        $longitude=$_POST["longitude"];
        $latitude=$_POST["latitude"];
        $status=$_POST["status"];

        // maken object -------------------------------
        $klacht = new klacht($naam, $email, $wijk, $datum, $naamklacht, $omschrijving,
            $foto, $longitude, $latitude, $status);
        $klacht->create();

        // afdrukken object ---------------------------

        ?>
    </body>
</html>

