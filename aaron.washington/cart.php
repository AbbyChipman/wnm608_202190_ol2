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
            <li class="active"><a href="#">Cart Overview</a></li>
            <li><a href="#">Checkout</a></li>
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
                    <div class="flex-stretch">
                        <h2>Premium Tshirt</h2>
                        <h4>&dollar;24.99</h4>
                    </div>
                </div>
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch">
                        <h2>Premium Tshirt</h2>
                        <h4>&dollar;24.99</h4>
                    </div>
                </div>
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch">
                        <h2>Premium Tshirt</h2>
                        <h4>&dollar;24.99</h4>
                    </div>
                </div>
                <div class="card-light cart-item form-control display-flex">
                    <div class="flex-none">
                        <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                            alt="Premium Tshirt &ndash; Mens"
                            title="Premium Tshirt &ndash; Mens" />
                    </div>
                    <div class="flex-stretch">
                        <h2>Premium Tshirt</h2>
                        <h4>&dollar;24.99</h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                <div class="card-light cart-total">
                    <ul>
                        <li>&dollar;24.99<br />Premium Tshirt</li>
                        <li>&dollar;24.99<br />Premium Tshirt</li>
                        <li>&dollar;24.99<br />Premium Tshirt</li>
                        <li>&dollar;24.99<br />Premium Tshirt</li>
                    </ul>
                    <hr>
                    <h3>&dollar;99.96</h3>
                    <a href="#"><button class="dark" style="width: 100%;">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>