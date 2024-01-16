<?php
require_once "../DbConnect.php";

class beheer
{

    // properties ------
    public $username;
    public $password;


    //method -- functions
    // constructor
    function __construct($username = NULL, $password = NULL)
    {
        $this->username = $username;
        $this->password = $password;

    }
// setters plaatsen waarde in object

    function set_username($username)
    {
        $this->username = $username;
    }

    function set_password($password)
    {
        $this->password = $password;
    }

    // getters halen waarden van opbject op
    function get_username()
    {
        return $this->username;
    }

    function get_password()
    {
        return $this->password;
    }

    public function afdrukken()
    {
        echo $this->get_username();
        echo "<br/>";
        echo $this->get_password();
        echo "<br/>";
    }
// createRoute-methode:
//voegt een nieuwe user toe aan de database
//Het haalt de waarden van de eigenschappen op en voert een SQL-invoegquery uit.
    public function createBeheer()
    {
        global $conn;
        // info from the objects into the statements
        $id = NULL;
        $username = $this->get_username();
        $password = $this->get_password();

        // prepares statement from the table
        $sql = $conn->Prepare("insert into beheer
values (:id,:username, :password)");
// variables into the statement
        $sql->bindParam(":id", $id);
        $sql->bindParam(":username", $username);
        $sql->bindParam(":password", $password);
        $sql->execute();
        //melding
        echo "!: </br>";

    }
// deze methode wordt niet gebruikt
    public function readBeheer()
    {
        global $conn;
        // makes statement
        $sql = $conn->prepare(" SELECT * FROM beheer");
        $sql->execute();
        foreach ($sql as $beheer) {
            echo $beheer["id"] . " - ";                         //
            $this->set_username($beheer["username"]);
            echo $beheer["username"] . " - ";
            $this->set_password($beheer["password"]);
            echo $beheer["password"] . " - ";
        }
    }
//searchRoute-methode:
//Deze methode zoekt een  user op basis van $routeID en toont de info
// Het voert een SQL-query uit met een parameter om de route te selecteren..
    public function searchBeheer($id)
    {
        global $conn;
        // sql statement
        $sql = $conn->prepare("select * from beheer
                               where id = :id");
        // variables into the statement
        $sql->bindParam(":id", $id);
        $sql->execute();
        // info from the array in object and prints it
        foreach ($sql as $beheer) {
            echo $beheer["id"] . "<br>";
            echo $this->username = $beheer["username"] . "<br>";
            echo $this->password = $beheer["password"] . "<br>";
        }
    }
//deleteRoute-methode:
//Deze methode verwijdert een user uit de database met een  gegeven id
// het voert een SQL-verwijderquery uit met een parameter om de route te verwijderen..
    public function deleteBeheer($id)
    {
        global $conn;
        //statements
        $sql = $conn->prepare(" DELETE FROM beheer
        where id = :id");
        // puts variables into the statement
        $sql->bindParam(":id", $id);
        $sql->execute();
    }
//updateRoute-methode:
//Deze methode werkt de gegevens van een bestaande user in de database bij op basis van id
// Het voert een SQL-updatequery uit om de gegevens van de route te updaten
    public function updateBeheer($id)
    {
        global $conn;
        // puts info from the variables into the statement
        $id;
        $username = $this->get_username();
        $password = $this->get_password();

        // statement
        $sql = $conn->prepare("
									update beheer
									set username=:username, password=:password  
									where id=:id
								 ");
        // variables into the statements

        $sql->bindParam(":id", $id);
        $sql->bindParam(":username", $username);
        $sql->bindParam(":password", $password);
        $sql->execute();
    }
}

