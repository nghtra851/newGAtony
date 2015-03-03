<?php

include "includeDB.php";

if (isset($_GET["id"])) {



    $select = "SELECT quantity FROM products WHERE id ='" . $_GET["id"] . "' ";
    $stmt = $dbm->prepare($select);
    $stmt->execute();
    $totalQuantity = $stmt->fetchAll();
//    echo "ID finns: " . $_GET["id"] . "<br><br>";
////    echo "Antal i databasen for id " . $_GET["id"] . " ";
//    var_dump($totalQuantity);
//    echo "<br><br>";
//    echo "antal: ";
//    echo count($_SESSION["cart"]);
    $addToCart = true;
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        if ($_GET["id"] == $_SESSION["cart"][$i]["id"] && $_GET["color"] == $_SESSION["cart"][$i]["color"] && $_GET["size"] == $_SESSION["cart"][$i]["size"]) {
//            echo "<br>Finns, position: ";
//            var_dump($i);
            $addToCart = false;

//            echo "<br>ja: ";
//            var_dump($_SESSION["cart"][$i]);
            $total = $_SESSION["cart"][$i]["amount"] + $_GET["amount"];
            foreach ($totalQuantity as $q) {
                foreach ($q as $que) {
                    if ($total > $que) {
//                        echo "<br>du försöker köpa " . $_SESSION["cart"][$i]["amount"] . " produkter. I databasen finns " . $que . " produkter";

                        $addToCart = false;
                    } else {
                        $addToCart = true;
                        $_SESSION["cart"][$i]["amount"] = $_SESSION["cart"][$i]["amount"] + $_GET["amount"];
                    }
                }
            }
        }
    }

    if ($addToCart) {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add") {
                $id = $_GET["id"];
                $name = $_GET["name"];
                $price = $_GET["price"];
                $size = $_GET["size"];
                $color = $_GET["color"];
                $amount = $_GET["amount"];
                $_SESSION["cart"][] = array("id" => $id, "name" => $name, "price" => $price, "color" => $color, "size" => $size, "amount" => $amount);
                header("Location: product.php");
            }
//            header("Location: product.php");
        } else {
            
        }
    }
} else {
    
}

