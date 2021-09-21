<style>
    @media screen and (max-width:425px){
        .where-to-find-heading{
margin-top:20%;
    }
}
</style>

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
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
    margin-top: -30px !important;
    color:yellow !important;
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
           <ul class="nav navbar-nav" style="border:1px solid red;height:200px;">
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

            <!-- <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zoneeee </a></li> -->
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
             
            <li><a href="#" class="other-link user-box"style="margin-top:4px;font-size:18px;"><?php echo $_SESSION['login_user2']; ?> </a>
          </li>
            <li><a href="logout_u.php" class="other-link">Log Out </a></li>
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
               <span class="signup-text-div"><span class="signup-text"> Sign Up</span><span class="caret"></span></span> </a>
                <ul class="dropdown-menu">
                  <li> <a href="customersignup.php"> User Sign-up</a></li>
                  <!-- <li> <a href="managersignup.php"> Manager Sign-up</a></li> -->
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

<div class="row">
    <div class="col-md-12 where-to-find-div">
        <h1 class="where-to-find-heading">you can find us here</h1>
    </div>
</div>
   
<div class="container">
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal2" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Uyo</p>
                                    <p class="address-text">165 Oron Road, Uyo</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Uyo 2</p>
                                    <p class="address-text">189 Ikot Ekpene Road, Uyo</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Uyo 3</p>
                                    <p class="address-text">Tropicana Mall, Udo Udoma</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal1" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Abia Mall</p>
                                    <p class="address-text">Food Court, Abia Mall</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Aba</p>
                                    <p class="address-text">8/9 Factory Road</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal3" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Onitsha</p>
                                    <p class="address-text">Onitsha Mall (Food Court, Onitsha Mall, ABS Junction,Off Awka Road, GRA, Onitsha</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal4" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Yenogoa</p>
                                    <p class="address-text">
                                            Kilimanjaro Building, Opp Ekeki Park, Mbiama Road</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal5" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Delta</p>
                                    <p class="address-text">Food Court, Delta Mall, Efurrun</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Asaba</p>
                                    <p class="address-text">Food Court, Asaba Mall</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Asaba</p>
                                    <p class="address-text">216 Nnebisi Road.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal6" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Benin</p>
                                    <p class="address-text">Sapele Road</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Asaba</p>
                                    <p class="address-text">Aduwawa Road</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal7" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Polopark mall</p>
                                    <p class="address-text">Polopark Mall, Abakailiki Road, Old GRA, Enugu</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Enugu Mall</p>
                                    <p class="address-text">Enugu Mall, Independence Layout. Enugu</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name"> Otigba Junction</p>
                                    <p class="address-text">Otigba Junction, Ogui Road</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Agbani Road</p>
                                    <p class="address-text">Agbani Road, Igbariam Bus-stop</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal8" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Maitama</p>
                                    <p class="address-text">911 Mall, 70 Usuma Street,Maitama</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Gwarinpa (3rd avenue)</p>
                                    <p class="address-text">Plot 84, 3rd Avenue, Gwarinpa</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Wuse 2</p>
                                    <p class="address-text">Aminu Kano Crescent, Wuse 2</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Kubwa</p>
                                    <p class="address-text">Gado Nasko Way, Kubwa</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Jabi</p>
                                    <p class="address-text">Jabi Lake Mall</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Gwarinpa (1st avenue)</p>
                                    <p class="address-text">1st Avenue, Primus Mall Beside Total Filling Station</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Kookies Mall</p>
                                    <p class="address-text">Ademola Adetokunbo, Wuse II</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal9" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Owerri</p>
                                    <p class="address-text">Shirley Supremo Shopping Mall, 32 Ekwema Crescent, Ikenegbu Layout</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Owerri</p>
                                    <p class="address-text">Owerri Mall (Food Court, Owerri Mall, Egbu Road, Owerri.</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Owerri</p>
                                    <p class="address-text">Orlu Road, Owerri.</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Owerri</p>
                                    <p class="address-text">IMSU Junction</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Owerri</p>
                                    <p class="address-text">No 17 Oyemka</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal10" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Ozumba</p>
                                    <p class="address-text">84 Ozumba Mbadiwe Street, Victoria Island</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Murtala Muhammed International Airport</p>
                                    <p class="address-text">Departure Lounge</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name"> Lekki</p>
                                    <p class="address-text">Food Court, Novare Mall, Sangatedo</p>
                                    <p class="address-text">07054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Lekki Phase 1</p>
                                    <p class="address-text">26B Admiralty Way, Lekki Phase 1</p>
                                    <p class="address-text">07054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Okota</p>
                                    <p class="address-text">175 Ago-palace Way, Okota.</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Jara Mall</p>
                                    <p class="address-text">Jara Mall, Simbiat Abiola Way, Ikeja</p>
                                    <p class="address-text">07054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Abraham Adesanya</p>
                                    <p class="address-text">1 Liberty Way, Off Abraham Adesanya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal11" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Sango-Ota</p>
                                    <p class="address-text">Food Court, The Palms Mall, Sango-Ota</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="modal fade" id="myModal12" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Agip</p>
                                    <p class="address-text">1 Agip Road, Agip Roundabout, Rumeme.</p>
                                    <p class="address-text">070054543663</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">GRA Junction</p>
                                    <p class="address-text">GRA Junction, Aba Road</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Gwarinpa (3rd avenue)</p>
                                    <p class="address-text">Plot 84, 3rd Avenue, Gwarinpa</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">GRA (Onne)</p>
                                    <p class="address-text">222 Onne Road, GRA Phase II</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Woji (KYC)</p>
                                    <p class="address-text">YKC Junction, Woji Road</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Trans-Amadi</p>
                                    <p class="address-text">Bewac Junction, T/A Road</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Choba</p>
                                    <p class="address-text">Uniport Choba</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Rumuibekwe</p>
                                    <p class="address-text">Rumuibekwe Junction,</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Rumuokwuta</p>
                                    <p class="address-text">Rumuokwuta Roundabout</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Rumuodara</p>
                                    <p class="address-text">Rumuodara Junction</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Rukpokwu</p>
                                    <p class="address-text">Rukpokwu Roundabout</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <div class="row stores mt-5 first-section">
        <div class="col-md-4 location-div">
            <div class="location-img-box">
                <img src="images/abia.jpg" alt="abia-location-img" class="location-image">
            </div>
            <div class="location-detail-box mt-3">
                <div>
                    <h5 class="location-name">Abia</h5>
                </div>
                <div class="location-details-button">
                    <!-- <button class=" view-location-button" data-toggle="modal"  data-target="#myModal">view outlets</button> -->
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal1"><span class="text">View Outlets</span></button>
                </div>
            </div>
        </div>
        <div class="col-md-4 location-div">
            <div class="location-img-box">
                <img src="images/akwa-ibom.jpg" alt="abia-location-img" class="location-image">
            </div>
            <div class="location-detail-box mt-3">
                <div>
                    <h5 class="location-name">Akwa ibom</h5>
                </div>
                <div class="location-details-button">
                <button class="view-location-button" data-toggle="modal" data-target="#myModal5"><span class="text">View Outlets</span></button>
                </div>
            </div>
        </div>
        <div class="col-md-4 location-div">
            <div class="location-img-box">
                <img src="images/anambra.jpg" alt="abia-location-img" class="location-image">
            </div>
            <div class="location-detail-box mt-3">
                <div>
                    <h5 class="location-name">Anambra</h5>
                </div>
                <div class="location-details-button">
                <button class="view-location-button" data-toggle="modal" data-target="#myModal3"><span class="text">View Outlets</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row stores mt-5 second-section">
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/bayelsa.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Bayelsa</h5>
                    </div>
                    <div class="location-details-button">
                        <button class="view-location-button" data-toggle="modal" data-target="#myModal4"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/delta.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Delta</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal5"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/edo.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Edo</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal6"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
    </div>
    <div class="row stores mt-5 third-section">
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/enugu.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Enugu</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal7"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/fct.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">FCT</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal8"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/imo.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Imo</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal9"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
    </div>
    <div class="row stores mt-5 fourth-section">
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/lagos.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Lagos</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal10"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/sango.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">Ogun</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal11"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
           <div class="col-md-4 location-div">
                <div class="location-img-box">
                    <img src="images/rivers.jpg" alt="abia-location-img" class="location-image">
                </div>
                <div class="location-detail-box mt-3">
                    <div>
                        <h5 class="location-name">River</h5>
                    </div>
                    <div class="location-details-button">
                    <button class="view-location-button" data-toggle="modal" data-target="#myModal12"><span class="text">View Outlets</span></button>
                    </div>
                </div>
           </div>
    </div>
    <div class="row store-line">
        <div class="col-md-12">
            <hr class="line">
        </div>
    </div>
   <?php include("includes/contacts-details.php")?>
</div>

<?php 
include"includes/footer.php";
?>