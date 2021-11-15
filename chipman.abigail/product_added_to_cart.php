<?php include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>

    <title>AbbyDazzled Designs - Order Confirmed!</title>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="view-window-small" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="grid">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <div class="card section rainbow">
                        <h2>Item Added to Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <div class="grid gap">
                <div class="col-xs-12 col-md-3"></div>
                <div class="col-xs-12 col-md-7">
                <h2>You added <?= $product->title ?> to your cart!</h2>
                </div>
                <div class="col-xs-12 col-md-2"></div>
                <div class="col-xs-12 col-md-2"></div>
                <div class="col-xs-12 col-md-8">
                    <div class="display-flex flex-align center flex-justify-center">
                    <div class="flex-none"><a class= "form-button-light" href="product_list.php">Continue Shopping</a></div>
                    <div class="flex-stretch"></div>
                    <div class="flex-none"><a class="form-button" href="cart.php">proceed to cart</a></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2"></div>
            </div>

            
        </div>
</body>
</html>