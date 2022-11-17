<?php
session_start();
session_unset();
session_destroy();
$logout="adminlogin.php";
header("location: $logout");
?>
