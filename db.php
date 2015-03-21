<?php
session_start();

include "includeDB.php";

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

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);

foreach ($products as $product) {
    echo $product["id"] . " ";
    echo $product["name"] . " ";
    echo $product["price"] . " ";
    echo $product["color"] . " ";
    echo $product["size"] . " ";
    echo $product["quantity"] . " ";
    echo "<form method='POST'>";
    echo "<input type='hidden' value='" . $product["id"] . "' name='id'>";
    echo "<input type='submit' name='action' value='delete'>";
    echo "</form>";
    echo "<form method='POST' action='edit.php'>";
    echo "<input type='hidden' value='" . $product["id"] . "' name='id'>";
    echo "<input type='submit' name='action' value='edit'>";
    echo "</form>";
    echo "<br>";
}

if (isset($_POST["action"])) {

    if ($_POST["action"] == "delete") {
        $delete = "DELETE FROM products WHERE id='" . $_POST["id"] . "'";
        $stmt = $dbm->prepare($delete);
        $stmt->execute();
        header("Location: db.php");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Product Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width">
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <a href="index.php">Home</a><br>
        <a href="add.php">Add product</a><br><br>
        <?php
        include "loggedin.php";
        include './style.html';
        ?>
    </body>
</html>
