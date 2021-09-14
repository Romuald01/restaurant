
<?php 
include("includes/header.php"); 
include("connection.php"); 
include("customer_registered_success.php"); 


?>

<style>
    .account-changes-div .text a{
            color:#fff;
            font-weight:700;
    }
    .account-changes-div .text a:hover{
        color:#dc042a;
        text-decoration:none;
        font-weight:700;
    }
    .btn-edit-acct{
        margin:5px;
    }
</style>
<div class="row mt-5">
    <div class="container ">
        <div class="row account-container">
            <div class="col-md-10 mx-auto">
                <h3 class="account-heading-main">My Account</h3>
                <h5 class="account-heading-sub">Account Information</h5>
                <div class="account-details">
                    <span class="account-data">Name: <?php echo $firstname ."  ". $lastname; ?> </span>
                    <span class="account-data">Phone Number: <?php echo $rows['phone_number']; ?></span>
                    <span class="account-data">Email: <?php echo $rows['email']; ?></span>
                    <span class="account-data">Balance: <?php echo "#:00"; ?></span>
                </div>
                <div class="account-changes-div">
                    <button class="btn btn-edit-acct mt-3"><span class="text"><a href="edit-account.php">EDIT ACCOUNT</a></span></button>
                    <button class="btn btn-edit-acct mt-3"><span class="text"><a href="change-password.php"> CHANGE PASSWORD</a></span></button>
                    <button class="btn btn-edit-acct mt-3"><span class="text"><a href="forget-password.php"> FORGET PASSWORD</a></span></button>
                </div>
                <h5 class="account-heading-sub mt-4">My Orders</h5>
                <div class="account-details user-account-details mb-2">
                
                </div>
            </div>             
        </div>
    </div>
</div>

<?php 
include("includes/footer.php");
?>