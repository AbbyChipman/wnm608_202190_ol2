<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

include "parts/meta.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AbbyDazzled Designs - Checkout</title>
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
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <h2>Shipping # items</h2>
            <div class="grid gap">
                <div class="col-xs-12 col-md-5">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-2">
                            <img class="product" src="img/logoColorNav.png" alt="AbbyDazzled Logo">
                        </div>
                        <div class="col-xs-12 col-md-2"></div>
                        <div class="col-xs-12 col-md-5">
                            <div class="checkout-title">Item Name</div>
                        </div>
                        <div class="col-xs-12 col-md-1"></div>
                        <div class="col-xs-12 col-md-2">
                            <div class="checkout-price">$price</div>
                        </div>
                    </div>
                    <hr>
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-2">
                            <img class="product" src="img/logoColorNav.png" alt="AbbyDazzled Logo">
                        </div>
                        <div class="col-xs-12 col-md-2"></div>
                        <div class="col-xs-12 col-md-5">
                            <div class="checkout-title">Item Name</div>
                        </div>
                        <div class="col-xs-12 col-md-1"></div>
                        <div class="col-xs-12 col-md-2">
                            <div class="checkout-price">$price</div>
                        </div>
                    </div>
                    <hr>
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-2">
                            <img class="product" src="img/logoColorNav.png" alt="AbbyDazzled Logo">
                        </div>
                        <div class="col-xs-12 col-md-2"></div>
                        <div class="col-xs-12 col-md-5">
                            <div class="checkout-title">Item Name</div>
                        </div>
                        <div class="col-xs-12 col-md-1"></div>
                        <div class="col-xs-12 col-md-2">
                            <div class="checkout-price">$price</div>
                        </div>
                    </div>
                    <hr>
                    <table class="table lined border">
                        <thead>
                            <tr>
                                <th colspan=3 style="font-size: 1.25em; text-align: center;">Order Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left;">Sub-total:</td>
                                <td>&nbsp</td>
                                <td style="text-align: right; font-weight: bold; font-size: 1.25em;">$Sub-Total</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Estimated Taxes:</td>
                                <td>&nbsp</td>
                                <td style="text-align: right; font-weight: bold; font-size: 1.25em;">$Taxes</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Estimated Shipping:</td>
                                <td>&nbsp</td>
                                <td style="text-align: right;font-weight: bold; font-size: 1.25em;">$Shipping</td>
                            </tr>
                            <tr style="font-size: 2em; border-top: 2px solid var(--color-main-dark);">
                                <td style="text-align: left;">Total:</td>
                                <td>&nbsp</td>
                                <td style="text-align: right; font-weight: bold;">$Total</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-md-1"></div>
                <div class="col-xs-12 col-md-6">
                <form action="" class="form">
                <div class="grid">
                    <div class="col-xs-12 col-md-12 card flat dark">
                        <h2 style="padding-left: 10px; color: var(--color-accent-light);">  Shipping Address</h2>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-control">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" placeholder="Name" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-control">
                            <label for="address-1" class="form-label">Street Address</label>
                            <input type="text" placeholder="Street Address" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-control">
                            <label for="address-2" class="form-label">Address Line #2</label>
                            <input type="text" placeholder="Address Line #2" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="form-control">
                            <label for="city" class="form-label">City</label>
                            <input type="text" placeholder="City" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="form-control">
                            <label for="state" class="form-label">ST</label>
                            <input type="text" placeholder="ST" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs- col-md-5">
                        <div class="form-control">
                            <label for="zip" class="form-label">ZIP</label>
                            <input type="number" placeholder="ZIP" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-control">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" placeholder="Phone" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-control">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" placeholder="email" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 card flat dark">
                        <h2 style="padding-left: 10px; color: var(--color-accent-light);">Payment</h2>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-control">
                            <label for="cc-name" class="form-label">Name (as it appears on card</label>
                            <input type="text" placeholder="Name" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-control">
                            <label for="cc-number" class="form-label">Credit Card Number</label>
                            <input type="text" placeholder="#### #### #### ####" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="form-control">
                            <label for="cc-exp" class="form-label">Expiration (MM/YYYY)</label>
                            <input type="text" placeholder="Exp (MM/YYYY)" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="form-control">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" placeholder="CVV" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-control">
                            <label for="cc-zip" class="form-label">ZIP</label>
                            <input type="number" placeholder="ZIP" class="form-input">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3"></div>
                    <div class="col-xs-12 col-md-2">
                        <div class="form-control"><a href="#" class="form-button-light">Reset</a></div>
                    </div>
                    <div class="col-xs-12 col-md-1"></div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-control"><a href="confirmation.php" class="form-button">Complete Purchase</a></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>