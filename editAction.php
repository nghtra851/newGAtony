<?php

include "includeDB.php";

if (isset($_POST["action"])) {
    if ($_POST["action"] == "Save") {
        $edit = "UPDATE products SET name='" . $_POST['name'] . "',price='" . $_POST['price'] . "',color='" . $_POST["color"] . "',size='" . $_POST["size"] . "',quantity='" . $_POST["quantity"] . "' WHERE id='" . $_POST['id'] . "'";
        $stmt = $dbm->prepare($edit);
        $stmt->execute();
        header("Location: db.php");
    }
}
