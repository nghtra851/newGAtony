<?php
session_start();

include "includeDB.php";

if (isset($_POST["action"])) {
    if ($_POST["action"] == "delete") {
//        echo "delete";
//        echo "<br>";
        $delete = "DELETE FROM products WHERE id='" . $_POST["id"];
        $stmt = $dbm->prepare($delete);
        $stmt->execute();
//        echo $delete;
    }
    if ($_POST["action"] == "edit") {
//        echo "edit";
//        echo "<br>";
        $edit = "UPDATE products SET name='" . $_POST["name"] . "', price='" . $_POST["price"] . "', color='" . $_POST["color"] . "', size='" . $_POST["size"] . "', quantity='" . $_POST["quantity"] . "', availability='" . $_POST["color"] . "' WHERE id=" . $_POST["id"];
        $stmt = $dbm->prepare($edit);
        $stmt->execute();
    }
    if ($_POST["action"] == "add") {
//        echo "add";
//        echo "<br>";
        $add = "INSERT INTO products (id, name, price, color, size, quantity, availability) VALUES ('" . $_POST["id"] . "', '" . $_POST["name"] . "', '" . $_POST["price"] . "', '" . $_POST["color"] . "','" . $_POST["size"] . "', '" . $_POST["quantity"] . "', '" . $_POST["availability"] . "')";
//        echo $add;
        $stmt = $dbm->prepare($add);
        $stmt->execute();
//        echo $add;
    }
} else {
    echo "Go do yo thang!";
    echo "<br><br>";
}

//$sql = "SELECT id FROM products WHERE id = :id AND name = :name AND price = :price AND color = :color AND size = :size AND quantity = :quantity AND availability = :availability";
$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":color", $color);
$stmt->bindParam(":size", $size);
$stmt->bindParam(":quantity", $quantity);
$stmt->bindParam(":availability", $availability);
$stmt->execute();
$products = $stmt->fetchAll();

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);
$availability = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_SPECIAL_CHARS);
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
        <a href="index.php">Home</a><br><br>
        <?php
        include "loggedin.php";
        ?>
        <div id="wrapper">


            <tr>
                <td>
                    <div id="products">
                        <?PHP
                        foreach ($products as $product) {
                            echo $product["id"] . '<form id="delete" method="POST">'
                            . '<input type="submit" name="action" value="delete">'
                            . '</form>' . " ";
                            echo $product["name"] . " ";
                            echo $product["price"] . " ";
                            echo $product["color"] . " ";
                            echo $product["size"] . " ";
                            echo $product["quantity"] . " ";
                            echo $product["availability"] . " ";
                            echo "<br>";
                        }
                        ?>
                    </div>
                    <form id="delete" method="POST">
                        <input  type="text" name="id">
                        <input  type="submit" name="action" value="delete">
                        <br><br>
                    </form>
                    <form id="editadd" method="POST">
                        <input type="text" name="id" placeholder="Index">
                        <br>
                        <br>
                        <input type="text" name="name" placeholder="Name">
                        <br>
                        <br>
                        <input type="text" name="price" placeholder="Price">
                        <br>
                        <br>
                        <input type="text" name="color" placeholder="Color">
                        <br>
                        <br>
                        <input type="text" name="size" placeholder="Size">
                        <br>
                        <br>
                        <input type="text" name="quantity" placeholder="Quantity">
                        <br>
                        <br>
                        <input type="text" name="availability" placeholder="Availability">
                        <br>
                        <br>
                        <input type="submit" name="action" value="edit">
                        <input type="submit" name="action" value="add">
                        <br><br>
                    </form>
        </div>
    </body>
</html>
