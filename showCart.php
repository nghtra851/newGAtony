<?php

//include "includeDB.php";
//$sql = "SELECT * FROM products";
//$stmt = $dbm->prepare($sql);
//$stmt->execute();
//$products = $stmt->fetchAll();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
if ($_SESSION["cart"] != NULL) {
    
    echo "<p class='item'>Cart: <br>";
    foreach ($_SESSION["cart"] as $cart) {
        echo $cart["name"] . " ";
        echo $cart["color"] . " ";
        echo $cart["size"] . " ";
        echo $cart["price"] . " £ ";
        echo $cart["amount"] . " ";
        echo "<br>";
        echo "<form class='col-sm-12' method='POST' action='deleteFromCart.php'>";
        echo "<input class='productbuttondesignPHP' type='hidden' value='" . $cart["id"] . "' name='id'> ";
        echo "<input class='productbuttondesignPHP' type='submit' name='action' value='delete'>";
        echo "</form>";
    }
    echo "</p>";
    echo "<a href='killCart.php'>Delete All</a><br>";

    function countTotal() {
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['amount'];
//            foreach($products as $product){
//            if ($item["amount"] > $product["quantity"]) {
//                echo "error";
//            }
//            }
        }

        return $total;
    }

    echo "<p>Total:  " . countTotal() . "   £</p>";
} 