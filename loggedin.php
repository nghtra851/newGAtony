<?php

$_SESSION["user"] = NULL;
if (isset($_SESSION["user"]) != NULL) {
    echo "Logged in as " . $_SESSION["user"];
    echo "<form method='POST' action='signout.php'>
            <input type='submit' name='action' value='signout'></input>
        </form>";
} else {
    echo $signoutmessage;
//    echo "<br>" . "<a href='login.php'>Login</a>" . "<br>";
//    echo "<a href='signup.php'>Sign Up</a>";
}
