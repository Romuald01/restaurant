

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
// $conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
// $Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Subject,Message) VALUES('$Name','$Email_Id','$Subject','$Message')";
$success = $conn->query($query);
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
  echo "<script>alert('the message fields are empty.')</script>";
}else if(!$success){
  die("Couldnt enter data: ".$conn->error);
}else if($success){
  echo "<script>alert('we have recive your message we will get back to you shortly')</script>";
}

$conn->close();
}
?>
<?php include("includes/header.php")?>
<div class="row">
    <div class="contact-background">
    </div>
</div>

<?php include("includes/contacts-details.php")?>
<?php include("includes/footer.php")?>
