<?php 
include("config.php");
include("includes/header.php");

$sender_name = $_POST['sender_name'];
$email = $_POST['email'];
$phone_number = $_POST['phonenumber'];
$message = $_POST['message'];

if(isset($_POST['submit'])){
    if(empty($_POST['sender_name']) || empty($_POST['email']) || empty($_POST['phonenumber']) || empty($_POST['message'])){
        echo "<script>alert('the message fields are empty.')</script>";
    }else{
        $sql = "INSERT INTO msg (sender_name, email, phone_number,message_content) VALUES ('$sender_name', '$email', '$phone_number', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('your message has been recieved,we will get back to you shortly.')</script>";
            $sender_name = "";
            $email = "";
            $phone_number = "";
            $message = "";
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
        mysqli_close($conn); 
    }
   
}


?>


<div class="row">
    <div class="contact-background">
    </div>
</div>

<?php include("includes/contacts-details.php")?>
<?php include("includes/footer.php")?>