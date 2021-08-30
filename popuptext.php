<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/popuptext.css">
    <title>popup</title>
</head>
<body>
<section class="restaurant-display">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="modal fade" id="myModal" role="dialog" style="display:none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Outlets</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="restaurants">
                                    <p class="restaurant-location-name">Onitsha</p>
                                    <p class="address-text">Onitsha Mall (Food Court, Onitsha Mall, ABS Junction, Off Awka Road, GRA, Onitsha</p>
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

<button class="bt" data-toggle="modal" data-target="#myModal"><span class="text">View Outlets</span></button>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

