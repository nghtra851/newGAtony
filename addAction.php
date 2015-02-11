<?php

include "db.php";

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":name", $name);
$stmt->execute();
$infos = $stmt->fetchAll();

if (isset($_GET["action"])) {
    if ($_GET["action"] == "add") {
        $add = "INSERT INTO products (name, price, color, size, quantity) VALUES ('" . $_GET["name"] . "','" . $_GET["price"] . "', '" . $_GET["color"] . "','" . $_GET["size"] . "','" . $_GET["quantity"] . "')";
        $stmt = $dbm->prepare($add);
        $stmt->execute();
        header("Location: db.php");
    }
}