<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="../gemeenteStyle.css">
<div class="navigatie">
    <nav>
        <img src="../image/logo_rotterdam.svg" id=logo alt="logo van Gemeente Rotterdam"/>
        <a href="../login/login.php" class="active">Go Back To Login</a>
        <a href="../index.php">Home</a>
    </nav>
</div>
    <h1>Make an Account</h1>
    <form action="beheerCreate2.php" method="post">
        <label for "usernameVak">username: </label>
        <input type = "text" name = "usernameField"></input>
        <br/>
        <label for "passwordVak">password: </label>
        <input type = "text" name = "passwordField"></input>
        <input type="submit">
    </form>
</body>
<footer>
    <div class="footer_rotterdam">
        Gemeente <br> Rotterdam
    </div>
    <div class="contact">
        <a href="../files_andere/contact.html">Contact</a>
    </div>
</footer>
</html>
