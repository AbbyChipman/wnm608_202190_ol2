<?php

// include_once helps with pulling more than one file from the same folder (there's two lib files on this page)
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>
    <!-- *** NAVBAR *** -->
    <?php include "parts/navbar.php"; ?>

    <!-- *** HERO *** -->
    <div class="hero hero-landing display-flex flex-align-center" style="min-height: 45vh;">
        <div class="container grid">
            <div class="col-xs-12 col-sm-12 col-md-6 hero-text">
                <h2>MAKING PRICES FALL</h2>
                <h4>Get 30&percnt; off your entire purchase with code FALLISHERE.</h4>
                <a href="shop.php?category=Everything"><button class="light">Start Saving&nbsp;&rsaquo;</button></a>
            </div>
            <div class="flex-stretch"></div>
        </div>
    </div>

    <!-- *** RECOMMENDED PRODUCTS *** -->
    <br />
    <div class="container">
        <h3 style="margin-bottom: 1rem;">Trending Now<h3>
        <?php recommendedType("T-shirt"); ?>
        <br />
        <h3 style="margin-bottom: 1rem;">Seasonal Specials<h3>
        <?php recommendedType("Sweater"); ?>
    </div>

    <!-- *** CATEGORIES *** -->
    <section style="width: 100%; background-color: var(--color-accent-red-medium);">
        <div class="container" style="margin-top: 3rem; margin-bottom: 0; padding-top: 2rem; padding-bottom: 2rem;">
            <div class="grid gap">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 display-flex flex-align-center">
                    <div class="flex-stretch text-center">
                        <h2 style="color: var(--color-primary-light);">Apparel For Everyone</h2>
                        <h5 style="color: var(--color-primary-light);">Find the right fit for you.</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="grid gap">
                        <div class="col-xs-12 col-sm-6">
                            <a href="shop.php?category=Men">
                                <div class="display-flex flex-align-center card-img card-bg-1">
                                    <h3 class="flex-stretch">Men</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="shop.php?category=Women">
                                <div class="display-flex flex-align-center card-img card-bg-2">
                                    <h3 class="flex-stretch">Women</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="shop.php?category=Teen">
                                <div class="display-flex flex-align-center card-img card-bg-3">
                                    <h3 class="flex-stretch">Teens</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <a href="shop.php?category=Kids">
                                <div class="display-flex flex-align-center card-img card-bg-4">
                                    <h3 class="flex-stretch">Kids</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

 <!-- *** FOOTER *** -->
 <?php include "parts/footer.php"; ?>

</html>