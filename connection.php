<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "decors";
$conn = mysqli_connect($servername  , $username , $password , $database );
if(!$conn){
    die("Cannot connect to database. Error -->" . mysqli_connect_error($conn)) ;
}


?>