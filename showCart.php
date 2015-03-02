<?php

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
        echo $cart["amount"] . " <br><br>";
    }
    echo "</p>";

    function countTotal() {
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['amount'];
        }

        return $total;
    }

    echo "<p>Total:  " . countTotal() . "   £</p>";
} 