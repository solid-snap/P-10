
<?php
require "../DbConnect.php";
class klacht
{
    private $Id;
    private $wijken_Id;
    private $status_Id;
    private $klachtOmschrijving;
    private $extraDetail;
    private $image;
    private $naam;
    private $email;
    private $longitude;
    private $latitude;
    private $datum;
    private $opmerking;
    function __construct($naam = NULL, $email = NULL, $wijken_Id = NULL, $datum = NULL, $klachtOmschrijving = NULL, $image = NULL,
                         $longitude = NULL, $latitude = NULL, $opmerking=null)
    {
        $this->wijken_Id = $wijken_Id;
        $this->klachtOmschrijving = $klachtOmschrijving;
        $this->image = $image;
        $this->naam = $naam;
        $this->email = $email;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->datum = $datum;
       $this->opmerking = $opmerking;
    }

    function set_wijken_Id($wijken_Id)
    {
        return $this->wijken_Id = $wijken_Id;
    }
    function set_status_Id($status_Id)
    {
        return $this->status_Id = $status_Id;
    }
    function set_klachtOmschrijving($klachtOmschrijving)
    {
        return $this->klachtOmschrijving = $klachtOmschrijving;
    }
    function set_extraDetail($extraDetail)
    {
        return $this->extraDetail = $extraDetail;
    }
    function set_image($image)
    {
        return $this->image = $image;
    }
    function set_naam($naam)
    {
        return $this->naam = $naam;
    }
    function set_email($email)
    {
        return $this->email = $email;
    }
    function set_longitude($longitude)
    {
        return $this->longitude = $longitude;
    }
    function set_latitude($latitude)
    {
        return $this->latitude = $latitude;
    }
    function set_datum($datum)
    {
        return $this->datum = $datum;
    }
    function set_opmerking($opmerking)
    {
        return $this->opmerking = $opmerking;
    }
    function get_wijken_Id()
    {
        return $this->wijken_Id;
    }
    function get_status_Id()
    {
        return $this->status_Id;
    }
    function get_klachtOmschrijving()
    {
        return $this->klachtOmschrijving;
    }
    function get_extraDetail()
    {
        return $this->extraDetail;
    }
    function get_image()
    {
        return $this->image;
    }
    function get_naam()
    {
        return $this->naam;
    }
    function get_email()
    {
        return $this->email;
    }
    function get_longitude()
    {
        return $this->longitude;
    }
    function get_latitude()
    {
        return $this->latitude;
    }
    function get_datum()
    {
        return $this->datum;
    }
    function get_opmerking()
    {
        return $this->opmerking;
    }
    public function afdrukken()
    {
        echo $this->get_wijken_Id();
        echo "<br/>";
        echo $this->get_status_Id();
        echo "<br/>";
        echo $this->get_klachtOmschrijving();
        echo "<br/>";
        echo $this->get_extraDetail();
        echo "<br/>";
        echo $this->get_image();
        echo "<br/>";
        echo $this->get_naam();
        echo "<br/>";
        echo $this->get_email();
        echo "<br/>";
        echo $this->get_longitude();
        echo "<br/>";
        echo $this->get_latitude();
        echo "<br/>";
        echo $this->get_datum();
        echo "<br/>";
        echo $this->get_opmerking();
    }
    public function create()
    {
        $id = NULL;
        $wijken_Id = $this->get_wijken_Id();
        $status_Id = $this->get_status_Id();
        $klachtOmschrijving = $this->get_klachtOmschrijving();
        $extraDetail = $this->get_extraDetail();
        $image = $this->get_image();
        $naam = $this->get_naam();
        $email = $this->get_email();
        $longitude = $this->get_longitude();
        $latitude = $this->get_latitude();
        $datum = $this->get_datum();
        $opmerking = $this->get_opmerking();
        try {
            global $conn;
            $sql = $conn->prepare("INSERT INTO klacht VALUES (:Id,:naam, :email, :wijken_Id, :datum, :klachtOmschrijving, :extraDetail, :image, :longitude, :latitude, :status_Id, :opmerking)");
            $sql->bindParam(":Id", $Id);
            $sql->bindParam(":naam", $naam);
            $sql->bindParam(":email", $email);
            $sql->bindParam(":wijken_Id", $wijken_Id);
            $sql->bindParam(":datum", $datum);
            $sql->bindParam(":klachtOmschrijving", $klachtOmschrijving);
            $sql->bindParam(":extraDetail", $extraDetail);
            $sql->bindParam(":image", $image);
            $sql->bindParam(":longitude", $longitude);
            $sql->bindParam(":latitude", $latitude);
            $sql->bindParam(":status_Id", $status_Id);
            $sql->bindParam(":opmerking", $opmerking);
            $sql->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function update($id)
    {
        global $conn;
        $id;
        $wijken_Id = $this->get_wijken_Id();
        $status_Id = $this->get_status_Id();
        $klachtOmschrijving = $this->get_klachtOmschrijving();
        $extraDetail = $this->get_extraDetail();
        $image = $this->get_image();
        $naam = $this->get_naam();
        $email = $this->get_email();
        $longitude = $this->get_longitude();
        $latitude = $this->get_latitude();
        $datum = $this->get_datum();
        $opmerking = $this->get_opmerking();
        
        $sql = $conn->prepare("update klacht set wijken_Id=:wijken_Id, status_Id=:status_Id, klachtOmschrijving=:klachtOmschrijving, extraDetail=:extraDetail, image=:image, 
                  naam=:naam, email=:email, longitude=:longitude, latitude=:latitude, datum=:datum, opmerking=:opmerking where id=:id");
        $sql->bindParam(":id", $id);
        $sql->bindParam("wijken_Id", $wijken_Id);
        $sql->bindParam("status_Id", $status_Id);
        $sql->bindParam("klachtOmschrijving", $klachtOmschrijving);
        $sql->bindParam("extraDetail", $extraDetail);
        $sql->bindParam("image", $image);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam("email", $email);
        $sql->bindParam("longitude", $longitude);
        $sql->bindParam("latitude", $latitude);
        $sql->bindParam("datum", $datum);
        $sql->bindParam("opmerking", $opmerking);
        $sql->execute();
    }
    public function read()
    {
        global $conn;
        $sql = $conn->prepare("SELECT * from klacht");
        $sql->execute();
        foreach ($sql as $klacht) {
            echo $klacht ["Id"] . "-";
            echo $klacht ["wijken_Id"] . "-";
            echo $klacht ["status_Id"] . "-";
            $this->set_klachtOmschrijving($klacht["klachtOmschrijving"]);
            echo $klacht["klachtOmschrijving"] . "-";
            $this->set_extraDetail($klacht["extraDetail"]);
            echo $klacht["extraDetail"] . "-";
            $this->set_image($klacht["image"]);
            echo $klacht["image"] . "_";
            $this->set_naam($klacht["naam"]);
            echo $klacht["naam"] . "-";
            $this->set_email($klacht["email"]);
            echo $klacht["email"] . "-";
            $this->oset_longitude($klacht["longitude"]);
            echo $klacht["longitude"] . "_";
            $this->set_latitude($klacht["latitude"]);
            echo $klacht["latitude"] . "-";
            $this->set_datum($klacht["datum"]);
            echo $klacht["datum"] . "-";
        }
    }
    public function search($id)
    {
        global $conn;
        $sql = $conn->prepare("select * from klacht where id=:id");
        $sql->execute([":id" => $id]);
        foreach ($sql as $klacht) {

            echo $klacht["wijken_Id"] . "<br>";
            echo $klacht["status_Id"] . "<br>";
            echo $this->klachtOmschrijving = $klacht["klachtOmschrijving"] . "<br>";
            echo $this->extraDetail = $klacht["extraDetail"] . "<br>";
            echo $this->image = $klacht["image"] . "<br>";
            echo $this->naam = $klacht["naam"] . "<br>";
            echo $this->email = $klacht["email"] . "<br>";
            echo $this->longitude = $klacht["longitude"] . "<br>";
            echo $this->latitude = $klacht["latitude"] . "<br>";
            echo $this->datum = $klacht["datum"] . "<br>";
        }
    }
    public function delete($id)
    {
        global $conn;
        $sql = $conn->prepare("DELETE FROM klacht where id =:id");
        $sql->bindParam(":id", $id);
        $sql->execute();
    }
}
 