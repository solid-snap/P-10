<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="pageInfo"><!-- HTML-form for login -->

    <div class="topnav" id="myTopNav">

        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">.</a></li>
                <li><a href="../beheer/beheerCreate1.php">aanmelden</a></li>
            </ul>
        </nav>
    </div>


    <?php
    // database configuration
    $dbhost = "localhost";
    $dbname = "p10";
    $dbuser = "root";
    $dbpass = "root";

    // class for the user
    class beheer
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

        public function login($username, $password)
        {
            try {
                // preparing the quary
                $query = "SELECT * FROM beheer WHERE username = :username";
                $stmt = $this->dbconn->prepare($query);

                // Parameters bind
                $stmt->bindParam(':username', $username);

                // Query execute
                $stmt->execute();

                // verify users
                if ($stmt->rowCount() > 0) {
                    $beheer = $stmt->fetch(PDO::FETCH_ASSOC);
                    $storedPassword = $beheer['password'];

                    // password verify
                    if (password_verify($password, $storedPassword)) {
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
    $beheer = new beheer($dbhost, $dbname, $dbuser, $dbpass);

    // login attempt verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($beheer->login($username, $password)) {
            header("location: login/test.php");
        } else {
            echo "Failed to login!";
        }
    }
    ?>

    <form method="POST" action="#">
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="submit" value="login">
    </form>
    <H2><a href="?">?</a></H2>
</div>
<footer> beans </footer>