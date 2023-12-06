<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klachtenformulier</title>
    <link rel="stylesheet" href="klachttemp.css">
</head>
<body>

<!--
$username = "root";
$password = "root";
$conn = new PDO("mysql:host=localhost;dbname=p10",$username, $password);
$select_wijk= $conn->prepare("SELECT * FROM wijk");
$select_wijk>execute();
$wijken = $select_wijk->fetchAll();
foreach($wijken as $wijk) {
    echo $wijk['naam'];
}
-->

<div class="form-container">
    <form action="create2.php" method="post">
        <div class="form-row">
            <div class="half-width">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" >
            </div>
            <div class="half-width">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
            </div>
        </div>
        <div class="form-row">
            <div class="half-width">
                <label for="wijk">wijk:</label>
                <select id="wijk" name="wijk" >
                    <option value="noord">noord</option>
                </select>

                <label for="datum">Datum:</label>
                <input type="date" id="datum" name="datum" >
            </div>
        </div>
        <div class="form-row">

            <div class="half-width">
                <label for="naamklacht">Naamklacht:</label>
                <input type="text" id="naamklacht" name="naamklacht" >
            </div>
        </div>
        <div class="form-row">
            <label for="omschrijving">Omschrijving:</label>
            <textarea id="omschrijving" name="omschrijving" rows="4"></textarea>
        </div>
        <div class="form-row">
            <label for="foto">Selecteer een foto:</label>
            <div class="file-container">
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>
        </div>
        <div class="form-row">
            <input type ="hidden" id="longitude">
            <input type="hidden" id="latitude">
            <input type="hidden" name="status">
            <input type="submit" value="Verzenden">
        </div>
        <script>
            const successCallback = (position) => {
                console.log(position.coords.longitude);

                console.log(position.coords.latitude);
                document.getElementById("latitude").value=position.coords.latitude
                document.getElementById("longitude").value=position.coords.longitude

            }



            const errorCallback = (error) => {
                console.log(error);
            };

            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        </script>
    </form>
</div>

</body>
</html>
