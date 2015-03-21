<?php

session_start();

include "includeDB.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
if (isset($_POST["id"])) {
    $select = "SELECT quantity FROM products WHERE id ='" . $_POST["id"] . "' ";
    $stmt = $dbm->prepare($select);
    $stmt->execute();
    $totalQuantity = $stmt->fetchAll();
    $addToCart = true;
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        if ($_POST["id"] == $_SESSION["cart"][$i]["id"] && $_POST["color"] == $_SESSION["cart"][$i]["color"] && $_POST["size"] == $_SESSION["cart"][$i]["size"]) {
            $addToCart = false;
            $total = $_SESSION["cart"][$i]["amount"] + $_POST["amount"];
            foreach ($totalQuantity as $items) {
                foreach ($items as $item) {
                    if ($total > $item) {
                        $addToCart = false;
                        $errormessage = "Too many items.";
                    } else {
                        $addToCart = false;
                        $_SESSION["cart"][$i]["amount"] = $_SESSION["cart"][$i]["amount"] + $_POST["amount"];
                    }
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                }
            }
        }
    }

    if ($addToCart) {
        if (isset($_POST["action"])) {
            if ($_POST["action"] == "add") {
                echo $_POST["amount"];
                $id = $_POST["id"];
                $name = $_POST["name"];
                $price = $_POST["price"];
                $size = $_POST["size"];
                $color = $_POST["color"];
                $amount = $_POST["amount"];
                $_SESSION["cart"][] = array("id" => $id, "name" => $name, "price" => $price, "color" => $color, "size" => $size, "amount" => $amount);
                header("Location: shop.php");
            }
        } else {
            
        }
    }
} else {
    
}

