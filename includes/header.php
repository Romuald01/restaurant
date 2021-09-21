<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/iconfont/material-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/store.css"> 
  <link rel="stylesheet" type="text/css" href="css/collapse.css"> 
  <link rel="stylesheet" type="text/css" href="css/career.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" type="text/css" href="css/terms.css">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link rel="stylesheet" type="text/css" href="css/faq.css">
  <link rel="stylesheet" type="text/css" href="css/popuptext.css">
  <link rel="stylesheet" type="text/css" href="css/button.css">
  <link rel="stylesheet" href="css/account.css">
  
  <title>Kilimanjaro restuarant</title>
</head>

  <body>
  <style>
  .signup-text{
    margin-top: -40px !important;
    color:#fff !important;
  }
  .signup-text-div{
    position: absolute;
    bottom:-35%;
    width:100px;
  }
  .restaurant-logo{
    margin-top: -10px !important;
    
  }
 
  @media screen and (max-width:767px){
    .restaurant-logo{
        margin-top: -40px;
    }
    .navbar-brand>img{
      margin-top: -12px;
    }
    .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse{
      max-height:100% !important;
    }
   
}
  @media screen and (max-width:320px){
        .restaurant-logo{
            height: 25px;
        }
}
 
.other-link{
color:#fff !important;

}
li .other-link{
margin-top: 8%;
}
</style>
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation"style="background-color: #dc042a;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.svg" alt="" class="restaurant-logo"></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">

<?php
if(isset($_SESSION['login_user1'])){

?>

<style>
  .nav-link{
    color:#fff !important;
  }
</style>
          <ul class="nav navbar-nav" style="border:1px solid #000;height:200px;"
          <li class="nav-item" style="color:#fff;">
                        <a class="nav-link" style="color:#fff;" href="foodlist.php">Order Now</a>
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
                        <a class="nav-link" href="contactus.php">Contact</a>
                        <hr class="cool cool--m">
                        </li>
            <li><a href="#"><?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav">
           <li class="nav-item">
                        <a class="nav-link" href="foodlist.php">Order Now</a>
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
                        <a class="nav-link" href="contactus.php">Contact</a>
                        <hr class="cool cool--m">
                        </li>
            <li><a href="cart.php" class="other-link">Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="#" class="other-link user-box" style="margin-top:4px;font-size:18px;"><?php echo $_SESSION['login_user2']; ?></a>
          </li>
             <li><a href="logout_u.php" class="other-link">Log Out</a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="foodlist.php">Order Now</a>
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
                        <a class="nav-link" href="contactus.php">Contact</a>
                        <hr class="cool cool--m">
                        </li>
            <li>
              <a href="#" class="dropdown-toggle signup-box-div" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               <span class="signup-text-div"><span class="signup-text">Sign Up</span><span class="caret"></span></span> </a>
                <ul class="dropdown-menu">
                  <li> <a href="customersignup.php"> User Sign-up</a></li>
                 </ul>
            </li>
    </ul>

<?php
}
?>
       </div>

      </div>
    </nav>
    
  <div class="container-fluid">
    <!-- <div class="row"> -->