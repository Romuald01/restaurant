<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/collapse.css">
    <link rel="stylesheet" href="css/terms.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/button.css">

    <title>Restaurant</title>
</head>
<body>
    <?php
        include("config.php");
        include("includes/select_from_db_logic.php");
        ?>
        <?php
        if(mysqli_num_rows($result) > 0 ){
           echo  "<div id='signupbox' style='display:none'>";
        }else{
            echo "<div id='signupbox' style='display:block'>";
        }
        ?>
        <?php
            // if(isset($_POST['logout'])){
            //     echo "<script>alert('dropdown box is hided')</script>"; 
            // }else{
            //     echo "<script>alert('dropdown box is not hided')</script>"; 
            // }
        ?>
  
        <nav class="navbar fixed-top navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="images/logo.svg" alt="" class="restaurant-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-togglext-white"><img src="images/icon-hamburger.svg" alt="hamburger-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Order Now</a>
                    <hr class="cool cool--m">
                    </li>
                    <li class="nav-item">   
                    <a class="nav-link" href="about.php">About</a>
                    <hr class="cool cool--m">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="store-location.php">Store Locations</a>
                    <hr class="cool cool--m">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                    <hr class="cool cool--m">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                    <hr class="cool cool--m">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                    <hr class="cool cool--m">
                    </li>
                    <li class="nav-item signup-box" id="signupbox">
                        <a class="nav-link signup-link" href="login.php">Signup/Login</a>
                        <hr class="cool cool--m">
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php echo $rows['first_name']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                            <a class="dropdown-item" href="account.php">My Account</a>
                            <a class="dropdown-item" name="logout" href="logout.php">log out</a>
                        </div>
                    </li>
                </div>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
