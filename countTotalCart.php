<?php

//session_start();

function countTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
//        echo "<br><br>Pris: " . $item['price'];
//        echo "<br>Antal:  " . $item['amount'];
        $total += $item['price'] * $item['amount'];
    }

    return $total;
}

echo "<br>Totalt: " . countTotal();
