<?php

if (isset($_SESSION["user"]) != NULL) {
    echo "Logged in as " . $_SESSION["user"];
    echo "<form method='POST'>
            <button type='submit' value='signout' name='action'>Sign Out</button>
        </form>";
} else {
//    echo $signoutmessage;
    echo "<br>" . "<a href='login.php'>Login</a>" . "<br>";
    echo "<a href='signup.php'>Sign Up</a>";
}
