<?php
session_start();

include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

//om tömma
if (isset($_POST["empty"])) {
    session_destroy();
    header("Location: ?");
    exit();
}

if (isset($_POST["action"]) == "add") {
    if ($_POST["color"] == "" or $_POST["size"] == "" or $_POST["amount"] == "" or $_POST["amount"] == "") {
        $errormessage = "Please fill in the forms.";
    } else {
        $item = $_POST["tophat"];
        $color = $_POST["color"];
        $size = $_POST["size"];
        $amount = $_POST["amount"];
        $_SESSION["cart"][] = array($item, $color, $size, $amount);
    }
}



//echo json_encode($cart);

$item = filter_input(INPUT_POST, "tophat", FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_POST, "color", FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_POST, "size", FILTER_SANITIZE_SPECIAL_CHARS);
$amount = filter_input(INPUT_POST, "amount", FILTER_SANITIZE_SPECIAL_CHARS);



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
include "signout.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title></title>
    </head>
    <body>

        <a href="db.php">Database</a><br><br>
        <?php
        include "loggedin.php";
        ?>
        <form method="POST">
            <p name="id">Top Hat</p>
            <input type="hidden" name="tophat" value="tophat">
            <select  type="text" name="color">
                <option value="green">Green</option>
                <option value="red">Red</option>
                <option value="purple">Purple</option>
                <option value="blue">Blue</option>
                <option value="pink">Pink</option>
                <option value="black">Black</option>
            </select>
            <select  type="text" name="size">
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
            <input type="text" name="amount" placeholder="Amount">
            <button type="submit" name="action" value="add">Add to cart</button>
        </form>
        <?php
        foreach ($_SESSION["cart"] as $cart) {
            foreach ($cart as $item) {
                $item = ucfirst($item);
                echo "<br>";
                echo $item;
            }
        }
        ?>
        <br>
        <a href="killCart.php">Delete all</a>
    </body>
</html>