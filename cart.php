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

if(isset($_POST["action"]) === "add"){
    $amount = $_POST["amount"];
}
//$amount = $_POST["amount"];
//$id=123;
//$price = 456;
//$amount = 789;

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_SPECIAL_CHARS);
$amount = filter_input(INPUT_POST, "amount", FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION["cart"][] = array($id,$price,$amount);


var_dump($_SESSION["cart"]);


////kolla om ta bort enskild rad ur carten
//if (isset($_POST["action"]) and $_POST["action"] == "delete") {
//    //loopa igenom värdena
//    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
//        //kolla om ID:t ska tas bort
//        if ($_SESSION["cart"][$i]["id"] == $_POST["id"]) {
//            //radera ett index ur en array
//            array_splice($_SESSION["cart"], $i, 1);
//            //avbryt loopen
//            break;
//        }
//    }
//    //ladda om sidan och visa kundcart
//    header("Location: ?cart");
//    exit();
//}
//
////kolla om vi ska uppdatera en rad ur carten
////denna del skulle kunna ingå i ovanstående
//if (isset($_POST["action"]) and $_POST["action"] == "update") {
//    //loopa igenom sessionsvariabeln
//    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
//        if ($_SESSION["cart"][$i]["id"] == $_POST["id"]) {
//            $_SESSION["cart"][$i]["count"] = $_POST["count"];
//            break;
//        }
//    }
//    //ladda om sidan och visa kundcarten
//    header("Location: ?");
//    exit();
//}
//
//
////kolla om vi fått nya grejer i carten och lägg dem där annars
//if (isset($_POST["action"]) and $_POST["action"] == "buy") {
//
//    $laggTill = true;
//
//    //loopa igenom kundcarten för att kolla om varan man lägger till redan finns
//    //här kan jag inte göra en foreach eftersom jag behöver kunna skriva der uppdaterade countet tillbaka till sessionen
//    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
//        //foreach ($_SESSION["cart"] as $pryl) {
//        //kolla om varan redan finns
//        if ($_SESSION["cart"][$i]["id"]) {
//            
//        }
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
        <form method="POST">
            <p name="id">Top Hat</p>
            <input type="text" name="amount">
            <button type="submit" name="action" value="add">Add to cart</button>
        </form>
    </body>
</html>
