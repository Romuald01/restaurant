<?php  include("includes/header.php");?> 
<div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto edit-account-container">
                    <div class="border-line">
                        <h3 class="edit-account-heading">Change Password</h3>
                        <p class="edit-account-paragraph">Is your password vulnerable? You can change it here.</p>
                        <div class="edit-account-form-div">
                            <form action="" class="change-password-form">
                            <label for="">Current password</label>
                            <div class="input-container">
                                <input type="password" placeholder="Password" class="change-password-one create-accpsw" name="password" required>
                                <i class="material-icons visibility visibility__3">visibility_off</i>
                            </div>
                            <label for="">New password</label>
                            <div class="input-container">
                                <input type="password" placeholder="Password" class="change-password-two create-accpsw" name="password" required>
                                <i class="material-icons visibility visibility__4">visibility_off</i>
                            </div>
                            <label for="">Confirm password</label>
                            <div class="input-container">
                                <input type="password" placeholder="Password" class="change-password-three create-accpsw" name="password" required>
                                <i class="material-icons visibility visibility__5">visibility_off</i>
                            </div>
                            <button class="btn w-100 btn-change-psw mt-3"><span class="text">Send</span></button>
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



