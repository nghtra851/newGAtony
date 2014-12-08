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

if (isset($_POST["action"]) == "add") {
    if ($_POST["color"] == "" or $_POST["size"] == "" or $_POST["amount"] == "") {
        $errormessage = "Please fill in the forms.";
    } else {
        $color = $_POST["color"];
        $size = $_POST["size"];
        $amount = $_POST["amount"];
        $_SESSION["cart"][] = array($color, $size, $amount);
    }
}
//$amount = $_POST["amount"];
//$id=123;
//$price = 456;
//$amount = 789;

$color = filter_input(INPUT_POST, "color", FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_POST, "size", FILTER_SANITIZE_SPECIAL_CHARS);
$amount = filter_input(INPUT_POST, "amount", FILTER_SANITIZE_SPECIAL_CHARS);




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

if (isset($_POST["action"]) == "signout") {
    if (isset($_SESSION["user"]) != NULL) {
        session_unset();
        session_destroy();
        $signoutmessage = "You have logged out.";
    } else {
        $signoutmessage = "You are not logged in. Please log in.";
    }
} else {
    $signoutmessage = "You are not logged in. Please log in.";
}
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
        if (isset($_SESSION["user"]) != NULL) {
            echo "Logged in as " . $_SESSION["user"];
            echo "<form method='POST'>
            <button type='submit' value='signout' name='action'>Sign Out</button>
        </form>";
        } else {
            echo $signoutmessage;
            echo "<br>" . "<a href='login.php'>Login</a>" . "<br>";
            echo "<a href='signup.php'>Sign Up</a>";
        }
        ?>
        <form method="POST">
            <p name="id">Top Hat</p>
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
            <input type="text" name="amount">
            <button type="submit" name="action" value="add">Add to cart</button>
        </form>
    </body>
</html>