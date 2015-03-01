<?php
//include "style.html";
session_start();

include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}


$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_GET, "color", FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_GET, "size", FILTER_SANITIZE_SPECIAL_CHARS);
$amount = filter_input(INPUT_GET, "amount", FILTER_SANITIZE_SPECIAL_CHARS);


include "signout.php";

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();




if (isset($_GET["id"])) {
    $select = "SELECT quantity FROM products WHERE id ='" . $_GET["id"] . "' ";
    $stmt = $dbm->prepare($select);
    $stmt->execute();
    $totalQuantity = $stmt->fetchAll();
    echo "ID finns: " . $_GET["id"] . "<br><br>";
    echo "Antal i databasen for id " . $_GET["id"] . " ";
    var_dump($totalQuantity);
    echo "<br><br>";
    echo "antal: ";
    echo count($_SESSION["cart"]);
    $addToCart = true;
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        if ($_GET["id"] == $_SESSION["cart"][$i]["id"] && $_GET["color"] == $_SESSION["cart"][$i]["color"] && $_GET["size"] == $_SESSION["cart"][$i]["size"]) {
            echo "<br>Finns, position: ";
            var_dump($i);
            $addToCart = false;
            
//            echo "<br>ja: ";
//            var_dump($_SESSION["cart"][$i]);
$total = $_SESSION["cart"][$i]["amount"] + $_GET["amount"];
            foreach ($totalQuantity as $q) {
                foreach ($q as $que) {
                    echo "<br>antal i db: ";
                    echo "<br>" . $que;
                    if ($total > $que) {
                        echo "<br>du försöker köpa " . $_SESSION["cart"][$i]["amount"] . " produkter. I databasen finns " . $que . " produkter";
                        
                        $addToCart = false;
                    } else {
                        $addToCart = false;
                        $_SESSION["cart"][$i]["amount"] = $_SESSION["cart"][$i]["amount"] + $_GET["amount"];
                    }
                }
            }
            echo "<br>antal: " . $_SESSION["cart"][$i]["amount"];
            echo "<br><br>";
        }
        echo "<br>Fanns inte";
        echo "<br><br>";
//        }
        echo"add to cart: ";
        var_dump($addToCart);
    }
    if ($addToCart) {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                $id = $_GET["id"];
                $name = $_GET["name"];
                $size = $_GET["size"];
                $color = $_GET["color"];
                $amount = $_GET["amount"];
                $_SESSION["cart"][] = array("id" => $id, "name" => $name, "color" => $color, "size" => $size, "amount" => $amount);
                echo "<br>La till i cart.";
            }

//lägg till
        } else {
            echo "<br>FELFELFEL<br>";
        }
    }

    echo "<br><br>";
} else {
    echo " Kan inte hitta ID ";
}








//        foreach ($products as $product) {
//            var_dump($product["quantity"]);
echo "<br><br><br><br>";
//            var_dump($_GET["amount"]);
//            for ($i = 0; $i < count($product["quantity"]); $i++) {
//                echo "antal: ";
//                var_dump($product["quantity"]);
//                echo "<br><br>";
//                echo "antal produkter i databasen: ";
//                var_dump(count($product["quantity"]));
//                echo "<br><br>";
//                if ($_GET["id"] == $_SESSION["cart"][$i][$product["id"]]) {
//                    echo "<br><br>";
//                    echo "Rätt id.";
//                    echo "<br><br>";
//                    if (($_SESSION["cart"][$i]["quantity"] + $_GET["amount"]) < $product["quantity"]) {
//                        $_SESSION["cart"][$i]["amount"]+=$_GET["amount"];
//                        echo "<br><br>";
//                        var_dump($_SESSION["cart"][$i]["amount"]);
//                        echo "<br><br>";
//                    } else {
//                        echo "Please choose fewer products.";
//                    }
//                }
//            }
//            if ($_SESSION["cart"] && $_GET["amount"] > $product["quantity"]) {
//                echo "Too much.";
//            } else {
//
////                cart ($products as $product) {
////                echo "produkter:";
////                var_dump($i);
////                echo "<br><cbr>";
//                if ($_GET["amount"] <= $product["quantity"]) {
//                    if ($_GET["id"] == "" or $_GET["name"] == "" or $_GET["color"] == "" or $_GET["size"] == "" or $_GET["amount"] == "") {
//                        $errormessage = "Please fill in the forms.";
//                    } else {
//                        
//                    }
//                }
////            else {
////                $message = "The amount is more than stock. Please choose fewer. Not more than " . $product["quantity"];
////                echo "<script type='text/javascript'>alert('$message');</script>";
//            }
//        }
//    }
//        }


var_dump($_SESSION);
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
            $name = $product["name"];
            $id = $product["id"];
            $color = $product["color"];
            $size = $product["size"];
            $price = $product["price"];
            $quantity = $product["quantity"];

            if ($quantity > 0) {
                echo "<tr>";
                echo "<form method='GET'>";
                echo "<p>" . $name . " " . $price . "£" . "</p>";
                echo "<td>";
                echo "<input type='hidden' name='id' value='$id'";
                echo "</td>";
                echo "<td>";
                echo "<input type='hidden' name='name' value='$name'";
                echo "<td>";
                $colors = explode(",", $color);

                echo "<select type='text' name='color'>";
                foreach ($colors as $color) {
                    echo "<option value='$color'>$color</option>";
                }
                echo "</select>";
                echo "<td>";
                $sizes = explode(",", $size);

                echo "<select type='text' name='size'>";
                foreach ($sizes as $size) {
                    echo "<option value='$size'>$size</option>";
                }
                echo "</select>";
                echo "<td>";
                echo "<input type='text' name='amount' placeholder='Amount'>";
                echo "<td>";
                echo "<button type='submit' name='action' value='add'>Add to cart</button>";
                echo "</form>";
                echo "</tr>";
            } else {
                $availability = "Out of stock";
                echo "<tr>";
                echo "<form method='GET'>";
                echo "<p>" . $name . " " . $price . "£" . "</p>";
                echo "<td>";
                echo "<input type='hidden' name='id' value='$id'";
                echo "</td>";
                echo "<td>";
                echo "<input type='hidden' name='name' value='$name'";
                echo "<td>";
                $colors = explode(",", $color);

                echo "<select type='text' name='color'>";
                foreach ($colors as $color) {
                    echo "<option value='$color'>$color</option>";
                }
                echo "</select>";

                echo "<td>";
                $sizes = explode(",", $size);

                echo "<select type='text' name='size'>";
                foreach ($sizes as $size) {
                    echo "<option value='$size'>$size</option>";
                }
                echo "</select>";
                echo "<td>";
                echo "<input type='text' name='amount' placeholder='Amount'>";
                echo "<td>";
                echo "<button type='submit' name='action' value='add' disabled>Add to cart</button>";
                echo $availability;
                echo "</form>";
                echo "</tr>";
            }
        }

        echo "<p class='item'>Cart: ";
        foreach ($_SESSION["cart"] as $cart) {
            foreach ($cart as $item) {
                $item = ucfirst($item);
                echo " ";
                echo $item;
            }
            echo "<br>";
        }
        echo "</p>";
        ?>
        <br>
        <a href="killCart.php">Delete all</a>
    </body>
</html>
<?php
exit();
?>