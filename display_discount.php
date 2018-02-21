<?php
require_once('./db.php');
  // $dsn = "mysql:host=localhost;dbname=discounter";
  // $username = 'root';
  // $password = null;
  // $conn = new PDO($dsn, $username, $password);

  // $productId = $_GET['product_id'];
  // $query = "SELECT * FROM products WHERE id = $productId ";
  // $statement = $conn->prepare($query);
  // $statement -> bindValue(':product_id', $productId);
  // $statement->execute();
  // $product = $statement->fetch();
  // $statement->closeCursor();

  // $couponId = $_GET['coupon_id'];
  // $query = "SELECT * FROM products WHERE id = $couponId ";
  // $statement = $conn->prepare($query);
  // $statement -> bindValue(':coupon_id', $couponId);
  // $statement->execute();
  // $coupon = $statement->fetch();
  // $statement->closeCursor();
  $productId = $_GET['product_id'];
  $couponId = $_GET['coupon_id'];
  $product = getOne("SELECT * FROM products WHERE id = :product_id", [':product_id' => $productId], $conn);
  $coupon = getOne("SELECT * FROM coupons WHERE id = :coupon_id", [':coupon_id' => $couponId], $conn);

  $description = $product['description'];
  $price = $product['price'];
  $discount = $coupon['discount_percent'];
  $discountAmount = $price * ($discount /100);
  $total = $price - $discountAmount;

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
            <dd><?= $description; ?></dd>
            <dt>List Price:</dt>
            <dd><?= $price ?></dd>
            <dt>Coupon:</dt>
            <dd><?= $coupon['code'] ?> - <?= $coupon['description'] ?></dd>
            <dt>Discount:</dt>
            <dd><?= $discount ?>%</dd>
            <dt>Discount Amount:</dt>
            <dd>$<?= $discountAmount ?></dd>
            <dt>Discount Price:</dt>
            <dd>$<?= $total ?></dd>
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