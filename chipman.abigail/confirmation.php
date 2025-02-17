<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

include "parts/meta.php";

resetCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>AbbyDazzled Designs - Order Confirmed!</title>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="view-window-small" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="grid">
                <div class="col-xs-12 col-sm-2 col-md-4"></div>
                <div class="col-xs-12 col-sm-4 col-md-4"></div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card section rainbow">
                        <h2>Order Confirmation</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <div class="grid gap">
                <div class="col-xs-12 col-md-3"></div>
                <div class="col-xs-12 col-md-6">
                    <h2>Thank you for your order!</h2>
                    <p>You will receive an email confirmation of your order at customer@email.com</p>
                    <p>Want text updates about your order? Enter your phone number below:</p>
                </div>
                <div class="col-xs-12 col-md-3"></div>

                <div class="col-xs-12 col-md-3"></div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-control">
                    <input type="number" class="form-input id="text-update" placeholder="123-456-8910">
                    </div>
                </div>
                <div class="col-xs-12 col-md-2">
                    <div class="form-control"><button type="button" class="form-button">Submit</button></div>
                </div>
                <div class="col-xs-12 col-md-3"></div>
            </div>
            <div class="grid gap">
            <div class="col-xs-3 col-md-4"></div>
                <div class="col-xs-4 col-md-4">
                <a href="index.php"><img class="logo-lg" src="img/logoColor.png" alt="AbbyDazzled Logo"></div></a>
                <div class="col-xs-7 col-md-4"></div>
            </div>
        </div>
    </div>
</body>
</html>