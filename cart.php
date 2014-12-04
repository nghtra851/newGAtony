<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

//om tömma
if (isset($_POST["empty"])) {
    session_destroy();
    header("Location: ?");
    exit();
}


//kolla om ta bort enskild rad ur vagnen
if (isset($_POST["action"]) and $_POST["action"] == "delete") {
    //loopa igenom värdena
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        //kolla om ID:t ska tas bort
        if ($_SESSION["cart"][$i]["id"] == $_POST["id"]) {
            //radera ett index ur en array
            array_splice($_SESSION["cart"], $i, 1);
            //avbryt loopen
            break;
        }
    }
    //ladda om sidan och visa kundvagn
    header("Location: ?cart");
    exit();
}

//kolla om vi ska uppdatera en rad ur vagnen
//denna del skulle kunna ingå i ovanstående
if (isset($_POST["action"]) and $_POST["action"] == "update") {
    //loopa igenom sessionsvariabeln
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        if ($_SESSION["cart"][$i]["id"] == $_POST["id"]) {
            $_SESSION["cart"][$i]["antal"] = $_POST["antal"];
            break;
        }
    }
    //ladda om sidan och visa kundvagnen
    header("Location: ?");
    exit();
}


//kolla om vi fått nya grejer i vagnen och lägg dem där annars
if (isset($_POST["action"]) and $_POST["action"] == "buy") {

    $laggTill = true;

    //loopa igenom kundvagnen för att kolla om varan man lägger till redan finns
    //här kan jag inte göra en foreach eftersom jag behöver kunna skriva der uppdaterade antalet tillbaka till sessionen
    for ($i = 0; $i < count($_SESSION["vagn"]); $i++) {
        //foreach ($_SESSION["vagn"] as $pryl) {
        //kolla om varan redan finns
        if ($_SESSION["vagn"][$i]["id"]) {
            
        }
    }
}
//if (isset($_POST["action"]) == "signout") {
//    session_unset();
//    session_destroy();
//    if (isset($_SESSION["user"]) === NULL) {
//        echo "You have logged out. Please come back.";
//    }
//}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title></title>
    </head>
    <body>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
        <a href="kill.php">Sign Out</a>
        <a href="db.php">Database</a><br><br>
<!--        <form method="POST">
            <button type="submit" value="signout" name="action">Sign Out</button>
        </form>-->
        <?php
//        if (isset($_SESSION["user"]) != NULL) {
//            echo "Logged in as " . $_SESSION["user"];
////        var_dump($_SESSION);
//        } else {
//            echo "You are not zlogged in. Please log in.";
//        }
        ?>
        <br><br><br>
        <form method="POST">
            <input type="submit" name="action" value="add">
        </form>
    </body>
</html>
