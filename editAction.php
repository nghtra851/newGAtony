<?php

include "includeDB.php";

if (isset($_GET["action"])) {
    if ($_GET["action"] == "Save") {
        $edit = "UPDATE products SET name='" . $_GET['name'] . "',price='" . $_GET['price'] . "',color='" . $_GET["color"] . "',size='" . $_GET["size"] . "',quantity='" . $_GET["quantity"] . "' WHERE id='" . $_GET['id'] . "'";
        $stmt = $dbm->prepare($edit);
        $stmt->execute();
        header("Location: db.php");
    }
}
