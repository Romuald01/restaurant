
<?php 
 include("config.php");
 include("logics/register.php");

   // SQL query to select data from database
$sql = "SELECT * FROM users ORDER BY id ASC ";
$result = $conn->query($sql);
$conn->close(); 

session_start();

 // SQL query to select data from database end
  // LOOP TILL END OF DATA 
    //  while($rows=$result->fetch_assoc())
    //     {
    //     }
    //

        
 

// if(isset($_POST['edit_acct_btn'])){
// ECHO "working";
    // $query = how to update a rows if a button is clicked
// }

?>
 <?php include("includes/header.php"); ?>
<div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto edit-account-container">
                    <div class="border-line">
                        <h3 class="edit-account-heading">Account information</h3>
                        <p class="edit-account-paragraph">Change or update your account information here.</p>
                        <div class="edit-account-form-div">
                            <form action="" class="edit-account-form" method="post">
                            <label for="firstname">First Name</label>
                            <input type="text" placeholder="First Name*" name="edit-acc-firstname"  value="<?php echo $_SESSION['firstname'] ?>"  required>
                            <label for="firstname">Last Name</label>
                            <input type="text" placeholder="lastname*" name="edit-acc-lastname"  value="<?php echo $lastname ?>" required>
                            <label for="firstname">Phone Number</label>
                            <input type="number" placeholder="+234 90 6351 4430*" name="edit-acc-phone" value="<?php echo $phonenumber; ?>"  required>
                            <label for="email">Email Address</label>
                            <input type="email" placeholder="Example@gmail.com" name="edit-acc-email" value="<?php echo $email; ?>" required>
                            <button class="btn w-100 btn-edit-acct mt-3" name="edit_acct_btn"><span class="text">Send</span></button>
                            <!-- <input type="submit" class="text btn w-100 btn-order mt-3" value="Send"> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include("includes/app-store-div.php")?>
<?php  include("includes/footer.php");?> 



