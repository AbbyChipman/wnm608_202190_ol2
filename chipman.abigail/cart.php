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
        
            <?php include "parts/cart_prod.php" ?>
            <?php include "parts/cart_prod.php" ?>
            <?php include "parts/cart_prod.php" ?>

            <div class="grid gap">
                <div class="col-xs-12 col-md-10"></div>
                <div class="col-xs-12 col-md-2">
                    <div class="checkout-price">$Sub-total</div>
                </div>
                <div class="col-xs-12 col-md-10"></div>
                <div class="col-xs-12 col-md-2">
                    <div class="checkout-price">$Shipping</div>
                </div>
                <div class="col-xs-12 col-md-10"></div>
                <div class="col-xs-12 col-md-2">
                    <div class="checkout-price">$Taxes</div>
                </div>
                <div class="col-xs-12 col-md-10"></div>
                <div class="col-xs-12 col-md-2">
                    <div class="checkout-price" style="font-size:2em;">$Total</div>
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