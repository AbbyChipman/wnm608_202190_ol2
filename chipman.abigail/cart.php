<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

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
            <h2>In Your Cart:</h2>
            <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <?= array_reduce($cart,'cartListTemplate') ?>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft light">
                    <div class="card hard display-flex">
                        <div class="flex-none">
                            <strong>Sub-Total</strong>
                        </div>
                        <div class="flex-stretch"></div>
                        <div class="flex-none checkout-price">
                            &dollar;3.50
                        </div>
                    </div>
                    <div class="card hard display-flex">
                        <div class="flex-none">
                            <strong>Taxes</strong>
                        </div>
                        <div class="flex-stretch"></div>
                        <div class="flex-none checkout-price">
                            &dollar;3.50
                        </div>
                    </div>
                    <hr>
                        <div class="card hard display-flex">
                            <div class="flex-none">
                                <strong>Total</strong>
                            </div>
                            <div class="flex-stretch"></div>
                            <div class="flex-none checkout-price">
                                &dollar;7.00
                            </div>
                        </div>
                </div>
            </div>

                <div class="col-xs-12 col-md-6"></div>
                <div class="col-xs-12 col-md-3">
                    <a href="product_list.php" class="form-button-light">Continue Shopping</a>
                </div>
                <div class="col-xs-12 col-md-3">
                    <a href="checkout.php" class="form-button">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>