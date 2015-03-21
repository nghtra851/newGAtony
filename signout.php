<?php

session_start();

if (isset($_POST["action"])) {
    if ($_POST["action"] == "signout") {
        session_unset();
        session_destroy();
        $signoutmessage = "You have logged out.";
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}