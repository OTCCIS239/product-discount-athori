<?php
    $products =[
        "WD Purple 4TB HDD",
        "Nvidia GeForce GTX 1060 Founder's Edition",
        "Intel i-7-7700k",
        "Corsair Vengeance 32GB (2x16GB) DDR4 3000 (PC4-24000)",
        "Trendnet Indoor/Outdoor 8MP 4K H.265 WDR PoE IR Bullet Network Camera"
    ];
    
    $coupons= array(
        'Regular Customer' => 10,
        'Valued Customer' => 15,
        "Non-valued Customer" => 5
    );
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Product Discount Calculator</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
           </div>
           <div class="col-sm-6">
                <h1>Product Discount Calculator</h1>
                <form action="display_discount.php" method="post">
                    <div class="form-group">
                        <label for="ProductDescription">Product Description:</label>
                        <!--<input type="text" name="product_description" class="form-control" placeholder="Enter Product Description">-->
                        <select name="description" class="form-control">
							<?php foreach($products as $product): ?>
								<option value="<? $product ?>"><?= $product ?></option>
							<?php endforeach; ?>
						</select>
                    </div>
                    <div class="form-group">
                        <label for="ListPrice">List Price:</label>
                        <input type="text" name="list_price" class="form-control" placeholder="Enter List Price">
                    </div>
                    <div class="form-group">
                    <!-- Create discounts with array. Discount percent = index location-->
                        <label for="DiscountPercent">Discount Percent:</label>
                        <!--<input type="text" name="discount_percent" class="form-control" placeholder="Enter Discount Percent">-->
                        <select name="discount_percent" class="form-control">
                        	<?php foreach($coupons as $coupon_text => $coupon_discount_value): ?>
								<option value="<? $coupon_discount_value ?>"><?= $coupon_discount_value ?>% - <?= $coupon_text ?></option>
                        	<?php endforeach; ?>
						</select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Calculate Discount:</button>
                </form>
           </div>
           <div class="col-sm">
           </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>