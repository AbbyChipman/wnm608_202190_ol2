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
            <div class="container flex-stretch">
                <div class="hero-text text-center">
                    <h2>SPECIAL ON ALL MENSWEAR</h2>
                    <h4>Use Code IROCK23 to get 25&percnt; off your entire purchase.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- *** CRUMB NAV *** -->
    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#"><?= $_GET['id'] ?></a></li>
        </ul>
    </nav>

    <!-- *** PRODUCT LIST *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <figure class="figure product-overlay">
                    <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                    <figcaption>
                        <div class="caption-body">
                            <div>T-Shirt</div>
                            <div>$24.99</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>

</html>