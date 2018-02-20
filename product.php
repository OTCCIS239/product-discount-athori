<?php
 
 $description = $_GET['description'];
 $price = $_GET['price'];
 $discount = $_GET['discount'];
 
 $discountAmount = $price * ($discount / 100);
 $total = $price - $discountAmount;
 
 ?>
 
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 
     <title>Product Discount Calculator</title>
   </head>
   <body>
   <div class="container" style="height: 100vh;">
     <div class="row align-items-center" style="height: 100%;">
         <div class="col-sm"></div>
         <div class="col-sm-6">
             <div class="card">
                 <div class="card-header">
                     Discount Calculator
                 </div>
                 <div class="card-body">
                     <dl class="row">
                         <dt class="col-6">Description</dt>
                         <dd class="col-6"><?= $description ?></dd>
 
                         <dt class="col-6">List Price</dt>
                         <dd class="col-6">$<?= $price ?></dd>
 
                         <dt class="col-6">Discount</dt>
                         <dd class="col-6"><?= $discount ?>%</dd>
 
                         <dt class="col-6">Discount Amount</dt>
                         <dd class="col-6">$<?= $discountAmount ?></dd>
 
                         <dt class="col-6">Discount Price</dt>
                         <dd class="col-6">$<?= $total ?></dd>
                     </dl>
 
                     <a href="/" class="btn btn-primary">Go Back</a>
                 </div>
             </div>
         </div>
         <div class="col-sm"></div>
     </div>
   </div>
 
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9BY1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar576PVCmYl" crossorigin="anonymous"></script>
   </body>
 </html> <?php
 
 $description = $_GET['description'];
 $price = $_GET['price'];
 $discount = $_GET['discount'];
 
 $discountAmount = $price * ($discount / 100);
 $total = $price - $discountAmount;
 
 ?>
 
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
     <title>Product Discount Calculator</title>
   </head>
   <body>
   <div class="container" style="height: 100vh;">
     <div class="row align-items-center" style="height: 100%;">
         <div class="col-sm"></div>
         <div class="col-sm-6">
             <div class="card">
                 <div class="card-header">
                     Discount Calculator
                 </div>
                 <div class="card-body">
                     <dl class="row">
                         <dt class="col-6">Description</dt>
                         <dd class="col-6"><?= $description ?></dd>
 
                         <dt class="col-6">List Price</dt>
                         <dd class="col-6">$<?= $price ?></dd>
 
                         <dt class="col-6">Discount</dt>
                         <dd class="col-6"><?= $discount ?>%</dd>

                         <dt class="col-6">Discount Amount</dt>
                         <dd class="col-6">$<?= $discountAmount ?></dd>
 
                         <dt class="col-6">Discount Price</dt>
                         <dd class="col-6">$<?= $total ?></dd>
                     </dl>
 
                     <a href="/" class="btn btn-primary">Go Back</a>
                 </div>
             </div>
         </div>
         <div class="col-sm"></div>
     </div>
   </div>
 
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9BY1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar576PVCmYl" crossorigin="anonymous"></script>
   </body>
</html> 