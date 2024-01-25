<?php
require "../DbConnect.php";

class klachtMelding
{
    public static function isTwoWeeksOld($klachtCreate)
    {
        $twoWeeksAgo = strtotime('-2 weeks');
        $klachtDatum = strtotime($klachtCreate);

        return $klachtDatum <= $twoWeeksAgo;
    }
    public function readKlacht()
    {
        $select_klacht = $conn->prepare("SELECT * FROM klacht  where id=$id");
        $select_klacht->execute();
        $klachten = $select_klacht->fetchAll();



    public static function sendAlert($klachtId)
    {
        echo "Klacht {$klachtId} is 2 weken oud.";
    }
}

// Example usage
$klachtId = "";
$klachtDatum = "2024-01-01"; // Replace with the actual creation date

if (klachtMelding::isTwoWeeksOld($klachtDatum)) {
    klachtMelding::sendAlert($klachtId);
}
