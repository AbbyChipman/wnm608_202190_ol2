<?php

include_once "lib/php/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <!-- *** CRUMB NAV *** -->
    <nav class="nav nav-crumbs">
        <ul style="margin-left: 0;">
            <li><a href="cart.php">Cart Overview</a></li>
            <li class="active"><a href="checkout.php">Checkout</a></li>
            <li><a href="checkout.php">Summary</a></li>
        </ul>
    </nav>

    <!-- *** CHECKOUT FORM *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">
                <div style="width: 100%; visibility: hidden;"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                <div class="card-light text-left form-control">
                    <h4><b>Personal</b></h4>
                    <form>
                        <div class="form-control">
                            <label class="form-label">First Name&ast;</label>
                            <input type="text" class="form-input" placeholder="Text">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Last Name&ast;</label>
                            <input type="number" class="form-input" placeholder="Text">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Address</label>
                            <input type="password" class="form-input" placeholder="Text">
                        </div>
                        <div class="form-control grid gap">
                            <div class="col-xs-12 col-md-7 col-lg-8">
                                <label class="form-label">City</label>
                                <input type="search" class="form-input" placeholder="Text">
                            </div>
                            <div class="col-xs-12 col-md-2 col-lg-2">
                                <label class="form-label">State</label>
                                <input type="search" class="form-input" placeholder="TN">
                            </div>
                            <div class="col-xs-12 col-md-3 col-lg-2">
                                <label class="form-label">ZIP</label>
                                <input type="search" class="form-input" placeholder="Code">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-light text-left form-control">
                    <h4><b>Billing</b></h4>
                    <form>
                        <div class="form-control">
                            <label class="form-label">Name on Card</label>
                            <input type="text" class="form-input" placeholder="First and Last Names">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Card Number</label>
                            <input type="number" class="form-input" placeholder="Number">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Card Expiration</label>
                            <input type="password" class="form-input" placeholder="Date">
                        </div>
                        <div class="form-control grid gap">
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">CVC</label>
                                <input type="search" class="form-input" placeholder="Number">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">ZIP Code</label>
                                <input type="search" class="form-input" placeholder="Number">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- *** BUTTONS *** -->
                <div class="display-flex">
                    <div class="flex-none">
                        <a href="cart.php"><button class="dark">&lsaquo;&nbsp;Back to Cart</button></a>
                    </div>
                    <div class="flex-stretch"></div>
                    <div class="flex-none">
                        <a href="summary.php"><button class="dark">Confirm Payment&nbsp;&rsaquo;</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">
                <div style="width: 100%; visibility: hidden;"></div>
            </div>
        </div>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>
</html>