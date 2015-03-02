<?php

session_start();

echo count($_SESSION["cart"]);
echo "<br>";
$totalPrice = array();

function countTotalCart() {
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        echo "<br><br>Pris per sak: " . $_SESSION["cart"][$i]["price"];
        echo "<br>Antal saker: " . $_SESSION["cart"][$i]["amount"];
        $totalPrice[] = $_SESSION["cart"][$i]["price"] * $_SESSION["cart"][$i]["amount"];
        foreach ($totalPrice as $tot) {
            echo "<br>Total:" . $tot;
        }
//        for ($i = 0; $i < $tot; $i++) {
//        echo $tot;
//        }
    }
    return $totalPrice;
}

countTotalCart();



foreach ($totalPrice as $plice) {
    echo "<br>Totalt: " . $plice;
}
