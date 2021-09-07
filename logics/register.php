
<?php
	$firstname  = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
	$password = md5($_POST['password']);
	
if (isset($_POST['submit'])) {
	// if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (first_name, last_name, phone_number, email,  password)
					VALUES ('$firstname', '$lastname',  $phonenumber, '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				// echo "<script>alert('Account created successfully.')</script>";
				echo "<script>alert('Account created successfully.'); window.location='index.php'</script>";
				$firstname = "";
				$lastname = "";
				$phonenumber = "";
                $email = "";
				$_POST['password'] = "";
			
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} 
        else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
}
?>