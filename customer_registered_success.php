<?php include("includes/header.php") ?>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>


<?php

require 'connection.php';
// $conn = Connect();

$firstname = $conn->real_escape_string($_POST['fullname']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into CUSTOMER(username,fullname,email,contact,password) VALUES('" . $firstname . "','" . $lastname . "','" . $email . "','" . $contact . "','" . $password ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $firstname!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>
</html>