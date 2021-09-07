
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
                            <input type="text" placeholder="First Name*" name="edit-acc-firstname"  value="<?php echo $rows['first_name']; ?>"  required>
                            <label for="firstname">Last Name</label>
                            <input type="text" placeholder="lastname*" name="edit-acc-lastname"  value="<?php echo $rows['last_name']; ?>" required>
                            <label for="firstname">Phone Number</label>
                            <input type="number" placeholder="+234 90 6351 4430*" name="editphone" value="<?php echo $rows['phone_number']; ?>"  required>
                            <label for="email">Email Address</label>
                            <input type="email" placeholder="Example@gmail.com" name="edit-acc-email" value="<?php echo $rows['email']; ?>" required>
                            <button class="btn w-100 btn-edit-acct mt-3" name="edit_acct_btn"><span class="text">Send</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php 
 include("config.php");
  // SQL query to select data from database
include("includes/select_from_db_logic.php"); 

//  code to update database
 $newFirstName = $_POST['edit-acc-firstname'];
 $newLastName = $_POST['edit-acc-lastname'];
 $newPhoneNumber = $_POST['editphone'];
 $newEmail = $_POST['edit-acc-email'];

    if(isset($_POST['edit_acct_btn'])){
        $Account = "UPDATE users set first_name = '$newFirstName' where id = 30 ";
        // $Account = "UPDATE users set first_name = '$newFirstName',last_name = '$newLastName',phone_number ='$newPhoneNumber',email ='$newEmail'";

        $update = mysqli_query($conn, $Account);
        if($update){
            echo "user account updated";
        }else{
            echo "user account has not been updated";
        }
    }
    
 
?>

<?php include("includes/app-store-div.php")?>
<?php  include("includes/footer.php");?> 



