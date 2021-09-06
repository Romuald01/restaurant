<?php


if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['firstname'] = $row['firstname'];
		header("Location: index.php");
	} else {
		// echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>