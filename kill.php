<?php
session_unset();
session_destroy();
header("Location:index.php");
echo "Logged out";
?>

