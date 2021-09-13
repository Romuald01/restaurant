<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "foodordermodel";


// for connection
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("Failed to connect");
}
?>