<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Summary &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <!-- *** CRUMB NAV *** -->
    <nav class="nav nav-crumbs" style="margin-top: 5rem;">
        <ul style="margin-left: 0;">
            <li><a href="cart.php">Cart Overview</a></li>
            <li><a href="checkout.php">Checkout</a></li>
            <li class="active"><a href="#">Summary</a></li>
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
                    <h4><b>Thank you for your order!</b></h4>
                    <p>You will receive an email once your order is shipped.</p>
                </div>
                <!-- *** BUTTONS *** -->
               <a href="shop.php?id=Mens"><button class="dark">Back to Store&nbsp;&rsaquo;</button></a>                   
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