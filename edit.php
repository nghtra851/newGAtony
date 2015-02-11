<!DOCTYPE>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit</title>
    </head>
    <body>
        <?php
        include "db.php";

        $sql = "SELECT * FROM products WHERE id='" . $_GET["id"] . "'";
        $stmt = $dbm->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        $infos = $stmt->fetchAll();
//        echo "infos: ";
//        var_dump($infos);
//        echo "<br>";
//        echo "get";
//        var_dump($_GET);
//        foreach ($products as $product) {
//            echo $product["name"] . "<br>";
//            echo $product["price"] . "<br>";
//            echo $product["color"] . "<br>";
//            echo $product["size"] . "<br>";
//            echo $product["quantity"] . "<br>";
//        }
        echo "<form method='GET' action='editAction.php'>";
        echo "<input type='hidden' value='" . $product['id'] . "' name='id'>";
        echo "<input type='text'  name='name' value='" . $product['name'] . "'";
        echo "<input type='text'  name='price' value='" . $product['price'] . "'";
        echo "<input type='text'  name='color' value='" . $product['color'] . "'";
        echo "<input type='text'  name='size' value='" . $product['size'] . "'";
        echo "<input type='text'  name='quantity' value='" . $product['quantity'] . "'";
        echo "<br><br>";

        echo "<input type='submit' name='action' value='Save'>" . "<br>";
        echo "</form>";
        ?>
        <!--
                <form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
                    <input name="FileInput" id="FileInput" type="file" />
                    <input type="submit"  id="submit-btn" value="Upload" />
                    <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
        
                </form>-->

<!--        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script src="uploadfile.js"></script>-->
    </body>
</html>