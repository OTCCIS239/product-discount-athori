<?php
    //Gets the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');

    //Calculates the discount and discounted price
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //Apply currncy formatting to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Product Discount Calculator</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm-6">
          <h1>Product Discount Calculator</h1>
          <dl>
            <dt>Product Description:</dt>
            <dd><?php echo htmlspecialchars($product_description); ?></dd>
            <dt>List Price:</dt>
            <dd><?php echo htmlspecialchars($list_price_formatted); ?></dd>
            <dt>Standard Discount:</dt>
            <dd><?php echo htmlspecialchars($discount_percent_formatted); ?></dd>
            <dt>Discount Amount:</dt>
            <dd><?php echo $discount_formatted; ?></dd>
            <dt>Discount Price:</dt>
            <dd><?php echo $discount_price_formatted; ?></dd>
          </dl>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>