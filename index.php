<?php
// session_start();
include("includes/header.php");

?>
    <div class="container">
        <div class="row ordering-headings">
                <div class="col-md-12 ordering-heading-contents">
                    <h1 class="ordering-heading-main">Enjoy tasty meals,</h1>
                    <h1 class="ordering-heading-sub">wherever you are.</h1>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12 ordering-from-div">
                <h3 class="ordering-from-text">ordering from:</h3>
            </div>
        </div>
        <div class="row ordering-form-section">
            <div class="col-md-12 input-content">
                    <form action="#" method="post" enctype="multipart/form-data"> 
                            <select name="state" id="" class="first-select">
                                <option value="Lagos" name="state" class="option">Lagos</option>
                                <option value="Kwara" name="state">Kwara</option>
                                <option value="Osun" name="state">Osun</option>
                                <option value="Ibadan" name="state">Ibadan</option>
                                <option value="Abia" name="state">Abia</option>
                                <option value="Ebonyi" name="state">Ebonyi</option>
                            </select>
                            <!-- <p style="cursor:pointer" onclick="butt()">Sango</p> -->

                            <select name="state" id="" class="second-select">
                                <option value="Ogun" name="location" onclick="locate()" class="locate">Sango</option>
                                <option value="Kwara" name="location" onclick="locate()"; class="option">Ilaro</option>
                                <option value="Osun" name="location" class="option" >Ifo</option>
                                <option value="Ibadan" name="location" class="option">Sabo</option>
                                <option value="Abia" name="location" class="option">Poly</option>
                                <option value="Ebonyi" name="location" class="option">Ibese</option>
                            </select>
                    </form>
            </div>
        </div>
        
            <div class="row">
                <div class="col-md-12 how-it-works">
                    <hr class="line">
                    <div class="how-it-works-heading">
                        <h1 class="how-it-works-text">How it works</h1>
                    </div>
                </div>
            </div>
            <div class="row how-it-works-content">
                <div class="col-md-4 select-location">
                    <div class="select-locaton-img-div">
                        <img src="images/location-icon.png" alt="select-location-logo" class="location-img">
                    </div>
                    <div class="location-heading-div">
                        <h5 class="location-heading">Select nearest location</h5>
                    </div>
                    <div class="location-paragraph-div">
                        <p class="location-paragraph">Select the state and restaurant closest to your pick-up/delivery location.</p>
                    </div>
                </div>
                <div class="col-md-4 choose-meal">
                    <div class="meal-img-div">
                        <img src="images/meal-icon.png" alt="select-location-logo" class="meal-img">
                    </div>
                    <div class="meal-heading-div">
                        <h5 class="meal-heading">Choose your meal</h5>
                    </div>
                    <div class="meal-paragraph-div">
                        <p class="meal-paragraph">Place your order by choosing from the numerous delicacies on our menu.</p>
                    </div>
                </div>
                <div class="col-md-4 delivery">
                    <div class="delivery-img-div">
                        <img src="images/delivery-pickup.png" alt="select-location-logo" class="delivery-img">
                    </div>
                    <div class="delivery-heading-div">
                        <h5 class="delivery-heading">Enjoy your meal</h5>
                    </div>
                    <div class="delivery-paragraph-div">
                        <p class="delivery-paragraph">Pick up your tasty meal in-store or have it delivered to your doorstep.</p>
                    </div>
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
    
<?php
include"includes/footer.php";
?>