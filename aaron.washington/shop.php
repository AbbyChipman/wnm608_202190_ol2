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
    <div class="container" style="margin-top: 5rem;">
        <div class="hero display-flex flex-align-center" style="min-height: 17vh;">
            <div class="flex-stretch">
                <div class="text-center" style="color: #fff;">
                    <h2>IT'S THAT TIME OF YEAR</h2>
                    <h4 style="color: var(--color-neutral-light);">Use Code FALLISHERE to get 30&percnt; off your entire purchase.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- *** CRUMB NAV *** -->
    <div class="container">
        <nav class="nav nav-crumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#"><?= $_GET['id'] ?></a></li>
            </ul>
        </nav>
    </div>

    <!-- *** PRODUCT LIST *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt1">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt2">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt3">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt4">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt5">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt6">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt7">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt8">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>


    <?php

    include "lib/php/functions.php";
    include "parts/templates.php";

    $result = makeQuery(
        makeConn(),
        "
        SELECT *
        FROM `products`
        ORDER BY `date_create` DESC
        LIMIT 12
        "
    );

    // Goes through whole array and reduces it to a single value, total, string, etc.
    echo array_reduce();

    ?>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>

</html>