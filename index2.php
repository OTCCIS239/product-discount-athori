<?php
$products = [
    'Xbox One' => 349.99,
    'PS4' => 299.99,
    'Wii U' => 249.99
];
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
                    <form action="<?= array_key_exists('debug', $_GET) ? 'debug.php' : 'product.php' ?>">
                        <div class="form-group">
                            <label for="description">Product</label>
                            <!-- <input type="text" class="form-control" name="description"> -->
                            <select name="price" id="price" class="form-control">
                            <?php foreach($products as $product => $price): ?>
                            <option value="<?= $price ?>"><?= $product ?> - $<?= $price ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- <div class="form-group">
                            <label for="price">List Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="price">
                            </div>
                        </div> -->
 
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="discount">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary">Calculate</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm"></div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 