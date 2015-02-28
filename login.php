<?php
session_start();

include "includeDB.php";

$_SESSION["user"] = NULL;

if (($_SESSION["user"]) === NULL) {
    echo "Var vänlig och logga in!";
} else {
    echo "Välkommen";
    $loginform;
}

if (isset($_POST["action"])) {
    if ($_POST["action"] == "login") {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
//    var_dump($username);

        $sql = "SELECT username FROM login WHERE username = :username AND password= :password";
        $stmt = $dbm->prepare($sql);
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
}
include './style.html';
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
            <input name="username" type="text" placeholder ="Username" required>
            <br>
            <br>
            <label>Password:</label>
            <br>
            <input name="password" type="password" placeholder="Password" required>
            <br>
            <br>
            <input type="submit" name="action" value="login">
            <br>

        </form>
        <br>
        <a href="kill.php">Sign Out</a><br>
        <a href="index.php">Home</a>
    </body>
</html>