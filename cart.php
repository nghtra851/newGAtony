<?php
session_start();

include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

//var_dump($_SESSION);
//echo json_encode($cart);

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
//var_dump($products);
//var_dump($_SESSION["cart"]);

if (isset($_GET["action"])) {
    if ($_GET["action"] == "add") {
        foreach ($products as $product) {
//            var_dump($product["quantity"]);
            var_dump($_GET["amount"]);
            if ($_SESSION["cart"] && $_GET["amount"] > $product["quantity"]) {
                echo "Too much.";
//                header("Location: index.php", true, 12);
//                exit();
            } else {

                foreach ($products as $product) {

                    if ($_GET["amount"] <= $product["quantity"]) {
                        if ($_GET["id"] == "" or $_GET["name"] == "" or $_GET["color"] == "" or $_GET["size"] == "" or $_GET["amount"] == "") {
                            $errormessage = "Please fill in the forms.";
                        } else {
                            $id = $_GET["id"];
                            $name = $_GET["name"];
                            $size = $_GET["size"];
                            $color = $_GET["color"];
                            $amount = $_GET["amount"];
                            $_SESSION["cart"][] = array($id, $name, $color, $size, $amount);
                        }
                    }
//            else {
//                $message = "The amount is more than stock. Please choose fewer. Not more than " . $product["quantity"];
//                echo "<script type='text/javascript'>alert('$message');</script>";
//            }
                }
            }
        }
    }
}   

//function compareQ() {
//    $products;
//}


var_dump($_SESSION);
//var_dump($products);
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