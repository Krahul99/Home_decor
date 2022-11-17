<?php
session_start();
session_unset();
session_destroy();
$logout="customerlogin.php";
header("location: $logout");
?>
