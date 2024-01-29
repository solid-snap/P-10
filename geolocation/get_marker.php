<?php
// Assuming you have a database connection
$servername = "localhost";
$dbname = "p10";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT klachtOmschrijving, latitude, longitude FROM klacht";
$result = $conn->query($sql);

$locations = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $locations[] = [$row['klachtOmschrijving'], $row['latitude'], $row['longitude']];
    }
}

// Close the database connection
$conn->close();

// Send locations to the client as JSON
echo json_encode($locations);

