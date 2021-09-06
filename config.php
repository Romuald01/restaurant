<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "restaurant";

$conn = mysqli_connect($server, $user, $pass, $database);
 if (!$conn) {
    die("<script>alert('Romuald Your database Connection Failed')</script>");
}

?>