<?php

if (isset($_POST["action"])) {
    if ($_POST["action"] == "signout") {
        if (isset($_SESSION["user"]) != NULL) {
            session_unset();
            session_destroy();
            $signoutmessage = "You have logged out.";
        } else {
            $signoutmessage = "You are not logged in. Please log in.";
        }
    } else {
        $signoutmessage = "You are not logged in. Please log in.";
    }
} else {
    $signoutmessage = "You are not logged in. Please log in.";
}
?>

