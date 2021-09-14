<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "email or Password is invalid";
}
else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
// $conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT email, password FROM CUSTOMER WHERE email=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $email, $password);
$stmt -> execute();
$stmt -> bind_result($email, $password);
$stmt -> store_result();

if ($stmt->fetch())  
{
	$_SESSION['login_user2']=$email; // Initializing Session
	header("location: foodlist.php"); // Redirecting To Other Page
	$username = "";
	$password = "";
} else {
$error = "email or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>