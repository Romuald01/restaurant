<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "restaurant";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failedm,mb.m,b.')</script>");
}

?>