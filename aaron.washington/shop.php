<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>
    <!-- *** NAVBAR *** -->
    <?php include "parts/navbar.php"; ?>

    <!-- *** CATEGORY HERO *** -->
    <div class="container">
        <div class="hero display-flex flex-align-center">
            <div class="flex-stretch">
                <div class="text-center" style="color: #fff;">
                    <h2>SPECIAL ON ALL MENSWEAR</h2>
                    <h4>Use Code IROCK23 to get 25&percnt; off your entire purchase.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- *** CRUMB NAV *** -->
    <div class="container">
        <nav class="nav nav-crumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#"><?= $_GET['id'] ?></a></li>
            </ul>
        </nav>
    </div>

    <!-- *** PRODUCT LIST *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt1">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt2">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt3">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt4">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt5">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt6">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt7">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=mens&prd=Tshirt8">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>

</html>