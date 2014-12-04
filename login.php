<?php
session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "projectdb");

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8';

$attributes = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$dbh = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);

$_SESSION["user"] = NULL;

if (($_SESSION["user"]) === NULL) {
    echo "Var vänlig och logga in!";
} else {
    echo "Välkommen";
    $loginform;
}


if (isset($_POST["action"]) == "login") {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
//    var_dump($password . " " . $username);

    $sql = "SELECT username FROM login WHERE username = :username AND password= :password";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    $login = $stmt->fetchAll();

//var_dump($login);

    if ($login != NULL) {
        echo "<br>";
        echo "Du är inloggad!";
        $_SESSION["user"] = $username;
        header("Location: index.php");
    } else {
        echo "<br>";
        echo "Var vänlig försök igen.";
        $_SESSION["user"] = null;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width">
    </head>
    <body>
        <form id="loginform" method="POST">
            <label>Username:</label>
            <br>
            <input name="username" type="text" placeholder ="Username">
            <br>
            <br>
            <label>Password:</label>
            <br>
            <input name="password" type="password" placeholder="Password">
            <br>
            <br>
            <input type="submit" name="action" value="Login">
            <br>

        </form>
        <br>
        <a href="kill.php">Sign Out</a><br>
        <a href="index.php">Home</a>
    </body>
</html>