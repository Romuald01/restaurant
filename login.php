<?php include("includes/header.php")?>
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
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="material-icons visibility">visibility_off</i>
                </div>
                <div class="password-sub-content">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" aria-label="Checkbox for following text input"><span class="remember-text">Remember Me</span>
                        </span>
                    </div>
                    <div>
                        <a href="forgetpsw.php" class="change-psw-link">forget password?</a>
                    </div>
                </div>   
                <button type="submit" name="login" class="btn btn-login"><span class="text">Login</span>
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

                </div>
        </div>
        <div class="col-md-5">
        <h3 class="signin-heading">Create an Account</h3>
            <p class="signin-greeting">Create your very own Kilimanjaro Account</p>
            <form action="#" method="post" class="signin-form create-account-form">
                <label for="firstname">First Name</label>
                <input type="text" placeholder="First Name*" name="firstname">
                <label for="firstname">Last Name</label>
                <input type="text" placeholder="lastname*" name="lastname">
                <label for="firstname">Phone Number</label>
                <input type="number" placeholder="+2349063514430*" name="phonenumber">
                <label for="email">Email Address</label>
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <label for="">password</label>
                <div class="input-container">
                    <input type="password" placeholder="Password*" name="password" required>
                    <i class="material-icons visibility">visibility_off</i>
                </div>
                <!-- <button type="submit" name="login" class="login-button">Login</button>  -->
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
    </div>
</div>
    <div class="row app-store-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 app-store-text-div">
                    <p class="app-store-text">With the Kilimeals app, anyone can simply use a mobile device
                        to look over our numerous delicacies. All you need to do is to
                        place an order, and pick up in-store or have it delivered to your
                        doorstep</p>
                        <div class="appstore-images-link">
                        <a href="www.googleplay.com"><img src="images/playstore.png" alt="app-store-logo" class="app-store-img"></a>
                            <a href="www.appstore.com"><img src="images/appstore.png" alt="app-store-logo" class="app-store-img app-store"></a>
                        </div>
                </div>
                <div class="col-md-6">
                    <!-- to be added shortly -->
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.php")?>