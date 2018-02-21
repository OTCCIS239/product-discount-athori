<?php
require_once('./db.php');
    // $dsn = "mysql:host=localhost;dbname=discounter";
    // $username = 'root';
    // $password = null;
    // $conn = new PDO($dsn, $username, $password);

    // $query = "SELECT * FROM products WHERE in_stock > 0";
    // $statement = $conn->prepare($query);
    // $statement->execute();
    // $products = $statement->fetchAll();
    // $statement->closeCursor();

    // $query = "SELECT * FROM coupons WHERE deleted_at IS NULL";
    // $statement = $conn->prepare($query);
    // $statement->execute();
    // $coupons = $statement->fetchAll();
    // $statement->closeCursor();

    // var_dump($products);
    //die();
    // $products = [
    //     'Xbox One' => 349.99,
    //     'PS4' => 299.99,
    //     'Wii U' => 249.99
    // ];

    $products = getMany("SELECT * FROM products WHERE in_stock > 0", [], $conn);
    $coupons = getMany("SELECT * FROM coupons WHERE deleted_at IS NULL", [], $conn);
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
                <form action="<?= array_key_exists('debug', $_GET) ? 'debug.php' : 'display_discount.php'?>">
                    <div class="form-group">
                        <label for="product_id">product</label>
                        <select name="product_id" id="product_id" class="form-control">
							<?php foreach($products as $product): ?>
								<option value="<?= $product['id'] ?>"><?= $product['name'] ?> - $<?= $product['price'] ?></option>
							<?php endforeach; ?>
						</select>
                    </div>
                    <div class="form-group">
                        <label for="coupon_id">Discount Percent:</label>
                        <!-- <input type="text" name="discount" class="form-control" placeholder="Enter Discount Percent"> -->
                        <select name="coupon_id" id="coupon_id" class="form-control">
							<?php foreach($coupons as $coupon): ?>
								<option value="<?= $coupon['id'] ?>"><?= $coupon['code'] ?> - <?= $coupon['discount_percent'] ?>%</option>
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