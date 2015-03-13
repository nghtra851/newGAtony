<?php

session_start();

include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
if (isset($_GET["id"])) {
    $select = "SELECT quantity FROM products WHERE id ='" . $_GET["id"] . "' ";
    $stmt = $dbm->prepare($select);
    $stmt->execute();
    $totalQuantity = $stmt->fetchAll();
    $addToCart = true;
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        if ($_GET["id"] == $_SESSION["cart"][$i]["id"] && $_GET["color"] == $_SESSION["cart"][$i]["color"] && $_GET["size"] == $_SESSION["cart"][$i]["size"]) {
            $addToCart = false;
            $total = $_SESSION["cart"][$i]["amount"] + $_GET["amount"];
            foreach ($totalQuantity as $items) {
                foreach ($items as $item) {
                    if ($total > $item) {
                        $addToCart = false;
                        $errormessage = "Too many items.";
                    } else {
                        $addToCart = false;
                        $_SESSION["cart"][$i]["amount"] = $_SESSION["cart"][$i]["amount"] + $_GET["amount"];
                    }
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                }
            }
        }
    }

    if ($addToCart) {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                echo $_GET["amount"];
                $id = $_GET["id"];
                $name = $_GET["name"];
                $price = $_GET["price"];
                $size = $_GET["size"];
                $color = $_GET["color"];
                $amount = $_GET["amount"];
                $_SESSION["cart"][] = array("id" => $id, "name" => $name, "price" => $price, "color" => $color, "size" => $size, "amount" => $amount);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        } else {
            
        }
    }
} else {
    
}

