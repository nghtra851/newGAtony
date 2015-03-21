<?php

session_start();
if (isset($_POST["action"])) {

    if ($_POST["action"] == "delete") {
        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            echo "<br>finns " . $_SESSION["cart"][$i]["id"];
            if ($_SESSION["cart"][$i]["id"] == $_POST["id"]) {
                array_splice($_SESSION["cart"], $i, 1);
            }
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    }
}