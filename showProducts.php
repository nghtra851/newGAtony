<?php

include './includeDB.php';

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":color", $color);
$stmt->bindParam(":size", $size);
$stmt->bindParam(":quantity", $quantity);
$stmt->execute();
$products = $stmt->fetchAll();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_GET, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_GET, 'color', FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_GET, 'size', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_GET, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);

foreach ($products as $product) {
    echo "<form method='GET'";
    echo "<a href='product.php'>"
    . "<div class='col-sm-3 produkter'>"
    . "<img class='img-responsive' src='http://placehold.it/400x400'>";
//    echo $product["id"] . " ";
    echo "<h3>" . $product["name"] . "</h3>";
    echo "<h4>" . $product["price"] . " £</h4>";
//    echo $product["color"] . " ";
//    echo $product["size"] . " ";
//    echo $product["quantity"] . " ";
    echo "<input type='submit' name='action' value='add'></input>";
    echo "</div>"
    . "</a>";
    echo "</form>";
}
