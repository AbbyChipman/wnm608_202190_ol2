<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// Call mySQL database
//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

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
    <nav class="nav nav-crumbs">
        <ul style="margin-left: 0;">
            <li class="active"><a href="cart.php">Cart Overview</a></li>
            <li><a href="cart.php">Checkout</a></li>
            <li><a href="cart.php">Summary</a></li>
        </ul>
    </nav>

    <!-- *** CART LIST *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8" style="text-align: right;">
                <a href="shop.php?category=Everything">Continue Shopping&nbsp;&rsaquo;</a>
                <?= array_reduce($cart_items,'cartListTemplate') ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                <div class="card-light cart-total form-control">
                    <?= cartTotals() ?>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- *** FOOTER *** -->
<?php include "parts/footer.php"; ?>

</html>