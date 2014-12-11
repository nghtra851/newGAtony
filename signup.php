<?php
session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "projectdb");

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8';

$attributes = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$dbh = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);

if (isset($_POST["action"])) {
    if ($_POST["action"] == "Sign Up") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $signup = "INSERT INTO login (username, password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";
        $stmt = $dbh->prepare($signup);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

//    var_dump($signup);
//    $signup = $stmt->
//    LOL

        if ($signup != NULL) {
            echo "<br>";
            echo "Välkommen " . $username . " till oss!";
            $_SESSION["user"] = $username;
            header("Location: index.php");
        } else {
            echo "<br>" . "Felaktig inmatning.";
            $_SESSION["user"] = NULL;
        }
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
        <form method="POST">
            <label>Username:</label>
            <br>
            <input name="username" type="text" placeholder ="Username" required>
            <br>
            <br>
            <label>Password:</label>
            <br>
            <input name="password" type="password" placeholder="Password" required>
            <br>
            <br>
            <input type="submit" name="action" value="Sign Up">
            <br>
            <br>
            <a href="kill.php">Home</a>
        </form>

    </body>
</html>