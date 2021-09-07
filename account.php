
    <?php 
    include("includes/header.php"); 
    include("config.php"); 
    include("includes/select_from_db_logic.php"); 
 
?>

<div class="row mt-5">
    <div class="container ">
        <div class="row account-container">
            <div class="col-md-10 mx-auto">
                <h3 class="account-heading-main">My Account</h3>
                <h5 class="account-heading-sub">Account Information</h5>
                <div class="account-details">
                    <span class="account-data">Name: <?php echo $rows['first_name'] ."  ". $rows['last_name'] ?> </span>
                    <span class="account-data">Email: <?php echo $rows['email'] ?></span>
                    <span class="account-data">Phone Number: <?php echo $rows['phone_number']?></span>
                    <span class="account-data">Balance: <?php echo "#:00";?></span>
                </div>
                <div class="account-changes-div">
                    <button type="submit" class="account-btn"><a href="edit-account.php">EDIT ACCOUNT</a></button>
                    <button type="submit" class="account-btn"><a href="change-password.php"> CHANGE PASSWORD</a></button>
                    <button type="submit" class="account-btn"><a href="forget-password.php"> FORGET PASSWORD</a></button>
                </div>
                <h5 class="account-heading-sub mt-4">My Orders</h5>
                <div class="account-details">
                
                </div>
            </div>             
        </div>
    </div>
</div>

<?php 
include("includes/footer.php");
?>