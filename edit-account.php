
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
                            <input type="text" placeholder="First Name*" name="first" value="<?php echo $rows['first_name']; ?>"   required>
                            <label for="firstname">Last Name</label>
                            <input type="text" placeholder="lastname*" name="last"  value="<?php echo $rows['last_name']; ?>" required>
                            <label for="firstname">Phone Number</label>
                            <input type="number" placeholder="+234 90 6351 4430*" name="accphone" value="<?php echo $rows['phone_number']; ?>"  required>
                            <label for="email">Email Address</label>
                            <input type="email" placeholder="Example@gmail.com" name="accemail" value="<?php echo $rows['email']; ?>" required>
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
 $newFirstName = $_POST['first'];
 $newLastName = $_POST['last'];
 $newPhone= $_POST['accphone'];
 $newEmail = $_POST['accemail'];
 
    if(isset($_POST['edit_acct_btn'])){
        $update_account = "UPDATE users set first_name='$newFirstName', last_name='$newLastName', phone_number='$newPhone', email='$newEmail' order by id DESC ";
        $update = mysqli_query($conn,$update_account);
        if($update){
            echo "<script>alert('Account Updated Sucessfully'); window.location='index.php'</script>";
        }else{
            echo "<script>alert('Account Not Updated');</script>";
        }

    }else{
        echo "password not updated";
    }
    mysqli_close($conn);
    
 
?>

<?php include("includes/app-store-div.php")?>
<?php  include("includes/footer.php");?> 



