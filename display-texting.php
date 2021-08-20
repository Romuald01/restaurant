<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<!-- <section class="restaurant-display"><div class="container"><div class="row"><div class="col-md-9 mx-auto"><div class="modal fade show" id="myModal" role="dialog" aria-modal="true" style="padding-right: 17px; display: block;"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h4 class="modal-title">Outlets</h4></div><div class="modal-body"><div class="restaurants"><p class="name">Abia Mall</p><p>Food Court, Abia Mall</p><p>070054543663</p></div><div class="restaurants"><p class="name">Aba</p><p>8/9 Factory Road</p><p>070054543663</p></div></div></div></div></div></div></div></div></section>
<button class="btn" data-toggle="modal" data-target="#myModal"><span class="text">View Outlets</span></button> -->
<!-- <span class="text">View Outlets</span> -->


<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
<?php
include("includes/footer.php");
?>