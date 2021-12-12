<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// Call mySQL database
//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

$cart = getCart();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <!-- *** CRUMB NAV *** -->
    <div class="container" style="padding-left: 1.5rem !important;">
        <nav class="nav nav-crumbs">
            <ul style="margin-left: 0;">
                <li class="active"><a href="cart.php">Cart Overview</a></li>
                <li><a href="cart.php">Checkout</a></li>
                <li><a href="cart.php">Summary</a></li>
            </ul>
        </nav>
    </div>

    <!-- *** CART LIST *** -->
    <div class="container">
        <?php
        if(count($cart)) {
        ?>

        <div class="grid gap">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8" style="text-align: right;">
                <a href="shop.php?category=Everything"><button class="dark">Continue Shopping&nbsp;&rsaquo;</button></a> 
                <?= array_reduce($cart_items,'cartListTemplate') ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                <div class="card-light cart-total form-control">
                    <?= cartTotals() ?>
                    <form action="checkout.php" method="post">
                        <div class="form-control">
                            <label class="form-label" style="text-align: left;">Got a Promo Code&quest;</label>
                            <input type="text" class="form-input" placeholder="Enter Code">
                        </div>
                    <form>
                    <a href="checkout.php" class="form-button">Checkout</a>
                </div>
            </div>
        </div>

        <?php
        } else {
        ?>

            <div class="col-xs-12" style="text-align: left;">
            <h4 style="margin-bottom: 1rem;">Your cart is empty&hellip;but you'll probably like these&colon;</h4>
            <?php

            recommendedEverything(6);

            ?>
        </div>

        <?php
        }
        ?>
    </div>

</body>

<!-- *** FOOTER *** -->
<?php include "parts/footer.php"; ?>

</html>