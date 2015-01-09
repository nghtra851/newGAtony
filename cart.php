<?php
session_start();

include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
//om tömma
//if (isset($_POST["empty"])) {
//    session_destroy();
//    header("Location: ?");
//    exit();
//}
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if ($_POST["id"] == "" or $_POST["name"] == "" or $_POST["color"] == "" or $_POST["size"] == "" or $_POST["amount"] == "") {
            $errormessage = "Please fill in the forms.";
        } else {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $size = $_POST["size"];
            $color = $_POST["color"];
            $amount = $_POST["amount"];
            $_SESSION["cart"][] = array($id, $name, $color, $size, $amount);
        }
    }
}
var_dump($_SESSION);

//echo json_encode($cart);

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
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
//include './style.html';
//var_dump($_SESSION);

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();

$nametest = "SELECT id FROM products";
$stmt = $dbm->prepare($nametest);
$stmt->execute();
$names = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title></title>
    </head>
    <body>

        <a href="db.php">Database</a>
        <a href="index.php">Home</a><br><br>
        <?php
        include "loggedin.php";



        foreach ($products as $product) {
            echo "<tr>";
            echo "<form method='POST'>";
            echo "<p>" . $name . "</p>";
            echo "<td>";
            echo "<input type='hidden' name='id' value='$id'";
            echo "</td>";
            echo "<td>";
            echo "<input type='hidden' name='name' value='$name'";
            echo "<td>";
            echo "<select type='text' name='color'>
                        <option value='green'>Green</option>
                        <option value='red'>Red</option>
                  </select>";
            echo "<td>";
            echo "<select type='text' name='size'>
                        <option value='XS'>XS</option>
                        <option value='M'>M</option>
                  </select>";
            echo "<td>";
            echo "<input type='text' name'amount' placeholder='Amount'>";
            echo "<td>";
            echo "<button type='submit' name='action' value='add'>Add to cart</button>";
            echo "</form>";
            echo "</tr>";
        }


//
//        echo "<form method='POST'>";
//        echo "<input type='hidden' name='id' value=''>";
//        echo "<input type='hidden' name='name' value='bob'>";
//        echo "<select  type='text' name='color'>
//                  <option value='green'>Green</option>
//                  <option value='red'>Red</option>
//                  <option value='purple'>Purple</option>
//                  <option value='blue'>Blue</option>
//                  <option value='pink'>Pink</option>
//                  <option value='black'>Black</option>
//                  </select>";
//        echo "<select  type='text' name='size'>
//                  <option value='XS'>XS</option>
//                  <option value='S'>S</option>
//                  <option value='M'>M</option>
//                  <option value='L'>L</option>
//                  <option value='XL'>XL</option>
//                  </select>";
//        echo "<input type='text' name='amount' placeholder='Amount'>";
//        echo "<button type='submit' name='action' value='add'>Add to cart</button>";
//        echo "</form>";


        foreach ($_SESSION["cart"] as $cart) {
            foreach ($cart as $item) {
                $item = ucfirst($item);
                echo " ";
                echo $item;
            }
            echo "<br>";
        }
        ?>
        <br>
        <a href="killCart.php">Delete all</a>
    </body>
</html>