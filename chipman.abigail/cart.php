<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
$cart = getCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>

    <title>AbbyDazzled Designs - Cart</title>
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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">

            <?php
                if (count($cart)) {
            ?>
            <h2>In Your Cart:</h2>
            <div class="grid gap">
                <div class="col-xs-12 col-md-7">
                    <?= array_reduce($cart_items,'cartListTemplate') ?>
                </div>
                <div class="col-xs-12 col-md-5">
                    <?= cartTotals() ?>
                </div>

                <div class="col-xs-12 col-md-6"></div>
                <div class="col-xs-12 col-md-3">
                    <a href="product_list.php" class="form-button-light">Continue Shopping</a>
                </div>
                <div class="col-xs-12 col-md-3">
                    <a href="checkout.php" class="form-button">Checkout</a>
                </div>
            </div>
            <?php
                } else {
            ?>
                <h2>Your Cart is empty!</h2>
                <div class="grid gap">
                <div class="col-xs-12 col-md-3"></div>
                    <div class="col-xs-12 col-md-6">
                        <a href="product_list.php" class="form-button-light">Continue Shopping</a>
                    </div>
                    <div class="col-xs-12 col-md-3"></div>
                </div>
                <h2>A few suggestions:</h2>
            <?php
                recommendedAny(4);
                }
            ?>
            
        </div>
    </div>
</body>
</html>