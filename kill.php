<?php
session_start();
session_unset();
session_destroy();
$_SESSION = NULL;
header("Location:index.php");
//echo "Logged out";
?>

