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
    <nav class="nav nav-crumbs" style="margin-top: 5rem;">
        <ul style="margin-left: 0;">
            <li class="active"><a href="#">Cart Overview</a></li>
            <li><a href="checkout.php">Checkout</a></li>
            <li><a href="#">Summary</a></li>
        </ul>
    </nav>

    <!-- *** CART LIST *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch" style="padding-left: 2em;">
                        <h3>Premium Tshirt</h3>
                        <h5>&dollar;24.99</h5>
                    </div>
                </div>
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch" style="padding-left: 2em;">
                        <h3>Premium Tshirt</h3>
                        <h5>&dollar;24.99</h5>
                    </div>
                </div>
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch" style="padding-left: 2em;">
                        <h3>Premium Tshirt</h3>
                        <h5>&dollar;24.99</h5>
                    </div>
                </div>
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch" style="padding-left: 2em;">
                        <h3>Premium Tshirt</h3>
                        <h5>&dollar;24.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                <div class="card-light cart-total form-control">
                    <ul>
                        <li><b>&dollar;24.99</b> &ndash; Premium Tshirt</li>
                        <li><b>&dollar;24.99</b> &ndash; Premium Tshirt</li>
                        <li><b>&dollar;24.99</b> &ndash; Premium Tshirt</li>
                        <li><b>&dollar;24.99</b> &ndash; Premium Tshirt</li>
                    </ul>
                    <hr>
                    <h3>Total: &dollar;99.96</h3>
                    <form>
                        <div class="form-control">
                            <label class="form-label" style="text-align: left;">Got a Promo Code&quest;</label>
                            <input type="text" class="form-input" placeholder="Enter Code">
                        </div>
                    <form>
                    <button class="dark" style="width: 100%;" action="checkout.php">Checkout</button>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- *** FOOTER *** -->
<?php include "parts/footer.php"; ?>

</html>