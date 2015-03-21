<?php

include "db.php";

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":name", $name);
$stmt->execute();
$infos = $stmt->fetchAll();

if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        $add = "INSERT INTO products (name, price, color, size, quantity) VALUES ('" . $_POST["name"] . "','" . $_POST["price"] . "', '" . $_POST["color"] . "','" . $_POST["size"] . "','" . $_POST["quantity"] . "')";
        $stmt = $dbm->prepare($add);
        $stmt->execute();
        header("Location: db.php");
    }
}