
    <?php 
    include("includes/header.php"); 
    include("config.php"); 
    


    session_start();

   


?>

<div class="row mt-5">
    <div class="container ">
        <div class="row account-container">
            <div class="col-md-10 mx-auto">
                <h3 class="account-heading-main">My Account</h3>
                <h5 class="account-heading-sub">Account Information</h5>
                <div class="account-details">
                    <span class="account-data">Name: <?php echo $SESSION['firstname'] ?> </span>
                    <span class="account-data">Email:</span>
                    <span class="account-data">Phone Number:</span>
                    <span class="account-data">Balance:</span>
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