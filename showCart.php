<?php

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
echo "<p class='item'>Cart: <br>";
foreach ($_SESSION["cart"] as $cart) {
    foreach ($cart as $item) {
        $item = ucfirst($item);
        echo " ";
        echo $item;
    }
    echo "<br>";
}
echo "</p>";
