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
            <li><a href="cart.php">Cart Overview</a></li>
            <li class="active"><a href="#">Checkout</a></li>
            <li><a href="#">Summary</a></li>
        </ul>
    </nav>

    <!-- *** CHECKOUT FORM *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">&nbsp;</div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                <div class="card-light">
                    <h4><b>Personal</b></h4>
                    <form>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="text" class="form-input" placeholder="Text">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="number" class="form-input" placeholder="Number">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="password" class="form-input" placeholder="Password">
                        </div>
                        <div class="form-control grid gap">
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">Example</label>
                                <input type="search" class="form-input" placeholder="Search">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">Example</label>
                                <input type="search" class="form-input" placeholder="Search">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-light">
                    <h4><b>Billing</b></h4>
                    <form>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="text" class="form-input" placeholder="Text">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="number" class="form-input" placeholder="Number">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="password" class="form-input" placeholder="Password">
                        </div>
                        <div class="form-control grid gap">
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">Example</label>
                                <input type="search" class="form-input" placeholder="Search">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">Example</label>
                                <input type="search" class="form-input" placeholder="Search">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-light">
                    <h4><b>Shipping</b></h4>
                    <form>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="text" class="form-input" placeholder="Text">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="number" class="form-input" placeholder="Number">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Example</label>
                            <input type="password" class="form-input" placeholder="Password">
                        </div>
                        <div class="form-control grid gap">
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">Example</label>
                                <input type="search" class="form-input" placeholder="Search">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label class="form-label">Example</label>
                                <input type="search" class="form-input" placeholder="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">&nbsp;</div>
        </div>
    </div>

    <!-- *** BACK BUTTON *** -->
    <div class="container">
        <a href="cart.php"><button class="dark">&lsaquo;&nbsp;Back to Cart</button></a>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>
</html>