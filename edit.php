<!DOCTYPE>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit</title>
    </head>
    <body>
        <?php
        include "includeDB.php";

        $sql = "SELECT * FROM products WHERE id='" . $_POST["id"] . "'";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        $products = $stmt->fetchAll();

        foreach ($products as $product) {
            echo $product["name"] . "<br>";
            echo $product["price"] . "<br>";
            echo $product["color"] . "<br>";
            echo $product["size"] . "<br>";
            echo $product["quantity"] . "<br>";
        }
        echo "<form method='POST' action='editAction.php'>";
        echo "<input type='hidden' value='" . $product['id'] . "' name='id'>";
        echo "<input type='text'  name='name' value='" . $product['name'] . "'>";
        echo "<input type='text'  name='price' value='" . $product['price'] . "'>";
        echo "<input type='text'  name='color' value='" . $product['color'] . "'>";
        echo "<input type='text'  name='size' value='" . $product['size'] . "'>";
        echo "<input type='text'  name='quantity' value='" . $product['quantity'] . "'>";
        echo "<br><br>";

        echo "<input type='submit' name='action' value='Save'>" . "<br>";
        echo "</form>";
        ?>

    </body>
</html>