<?php 
include("includes/header.php");
// include("connection.php");
// include("customer_registered_success.php");


?>
  <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
    <form role="form" action="customer_registered_success.php" method="POST">
      <div class="container">
        <div class="row signin-and-login-form">
            <div class="col-md-5">
                <h3 class="signin-heading">Sign In</h3>
                <p class="signin-greeting">Welcome back! Sign in to your Account</p>
                <form action="#" method="post" class="signin-form">
                    <label for="email">Email Address</label>
                    <input type="email" placeholder="Example@gmail.com" name="email" required>
                    <label for="">password</label>
                    <div class="input-container">
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                        <i class="material-icons visibility">visibility_off</i>
                    </div>
                    <div class="password-sub-content">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" aria-label="Checkbox for following text input"><span class="remember-text">Remember Me</span>
                            </span>
                        </div>
                        <div>
                            <a href="forget-password.php" class="change-psw-link">forget password?</a>
                        </div>
                    </div>   
                    <button class="btn  btn-login mt-3" name="login"><span class="text">Login</span></button>
                    </button> 
                    <span class="or-sign-with-text">Or sign in with</span>
                    <div class="other-social">
                    
                    <div class="">
                              <button class="facebook-logo-button">
                                  <i class="fab fa-facebook"></i><a href="#">FACEBOOK</a> 
                            </button>
                        </div>
                        <div>
                            <button class="google-logo-button">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg"><g fill="#000" fill-rule="evenodd"><path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path><path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path><path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path><path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path><path fill="none" d="M0 0h18v18H0z"></path></g></svg><a href="#" class="google-text pl-2">GOOGLE</a>
                            </button>
                        </div>
                    </div>        
                </form>
            </div>
            <div class="col-md-2 or-box">
                    <div class="or-line">
                            <div class="circle">
                                    <span class="or-text">Or</span>
                            </div>
                    </div>
            </div>
            <div class="col-md-5">
                <h3 class="signin-heading">Create New Account</h3>
                <p class="signin-greeting">Create your very own Kilimanjaro Account</p>
                <form role="form" action="customer_registered_success.php" method="POST class="signin-form create-account-form">
                    <label for="firstname">First Name</label>
                    <input type="text" placeholder="First Name*" name="fullname" required>
                    <label for="firstname">Last Name</label>
                    <input type="text" placeholder="lastname*" name="lastname" required>
                    <label for="firstname">Phone Number</label>
                    <input type="number" placeholder="+2349063514430*" name="contact"  required>
                    <label for="email">Email Address</label>
                    <input type="email" placeholder="Example@gmail.com" name="email" required>
                    <label for="">password</label>
                    <div class="input-container">
                        <input type="password" placeholder="Password" class="create-password create-accpsw" name="password" required>
                        <i class="material-icons visibility visibility__2">visibility_off</i>
                    </div>
                    <button class="btn btn-login mt-3" name="nam"><span class="text">Register</span></button>

                    <span class="or-sign-with-text my-2 d-block">Or sign in with</span>
                    <div class="other-social">
                        <div class="">
                              <button class="facebook-logo-button">
                                  <i class="fab fa-facebook"></i><a href="#">FACEBOOK</a> 
                            </button>
                        </div>
                        <div>
                        <!-- <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label> -->

                            <button class="google-logo-button">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg"><g fill="#000" fill-rule="evenodd"><path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path><path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path><path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path><path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path><path fill="none" d="M0 0h18v18H0z"></path></g></svg><a href="#" class="google-text pl-2">GOOGLE</a>
                            </button>
                        </div>
                    </div>       
                </form>
            </div>
        </div>
      </div>
    </form>
</div>
<?php include("includes/app-store-div.php")?>
<?php include("includes/footer.php")?>
