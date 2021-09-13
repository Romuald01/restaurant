

    <?php
if (isset($_POST['submit'])){
require 'connection.php';

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
// $Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>


<div class="row">
    <div class="contact-background">
    </div>
</div>

<?php include("includes/contacts-details.php")?>
<?php include("includes/footer.php")?>