
<link rel="stylesheet" href="?">
<div class="pageInfo">

        <div class="topnav" id="myTopNav">

    <nav>
        <form method="POST" action="#">
            <input type="text" name="naam" placeholder="naam" required><br>
            <input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
            <input type="submit" value="login">
        </form>

        </div>
    </nav>
    </div>


    <?php
    // database configuration
    $dbhost = "localhost";
    $dbname = "p10";
    $dbuser = "root";
    $dbpass = "root";

    // class for the user
    class Beheer
    {
        private $dbconn;

        public function __construct($dbhost, $dbname, $dbuser, $dbpass)
        {
            // making a connection with the database
            $dsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4";

            try {
                $this->dbconn = new PDO($dsn, $dbuser, $dbpass);
                $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Kan geen verbinding maken met de database: " . $e->getMessage());
            }
        }

        public function login($naam, $wachtwoord)
        {
            try {
                // preparing the quary
                $query = "SELECT * FROM beheer WHERE naam = :naam";
                $stmt = $this->dbconn->prepare($query);

                // Parameters bind
                $stmt->bindParam(':naam', $naam);

                // Query execute
                $stmt->execute();

                // verify users
                if ($stmt->rowCount() > 0) {
                    $beheer = $stmt->fetch(PDO::FETCH_ASSOC);
                    $storedPassword = $beheer['wachtwoord'];

                    // password verify
                    if (password_verify($wachtwoord, $storedPassword)) {
                        // login successful
                        return true;
                    }
                }

                // login failed
                return false;
            } catch (PDOException $e) {
                die("Fout bij het uitvoeren van de query: " . $e->getMessage());
            }
        }
    }

    // login system
    $user = new User($dbhost, $dbname, $dbuser, $dbpass);

    // login attempt verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = $_POST["naam"];
        $wachtwoord = $_POST["wachtwoord"];

        if ($user->login($naam, $wachtwoord)) {
            header("location://");
        } else {
            echo "Failed to login!";
        }
    }
    ?>

    <form method="POST" action="#">
        <input type="text" name="naam" placeholder="naam" required><br>
        <input type="password" name="wachtwoord" placeholder="wachtwoord" required><br>
        <input type="submit" value="login">
    </form>

</div>
<footer> bbq </footer>