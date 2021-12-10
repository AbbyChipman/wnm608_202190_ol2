<?php

// include_once helps with pulling more than one file from the same folder (there's two lib files on this page)
include_once "lib/php/functions.php";
include_once "parts/templates.php";

/* Call mySQL database
$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$category = $product->category;

function productFilter () {
    if ($category != $_GET['category']) {
        
    }
}

*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/shop.js"></script>
</head>

<body>
    <!-- *** NAVBAR *** -->
    <?php include "parts/navbar.php"; ?>

    <!-- *** CATEGORY HERO *** -->
    <div class="container">
        <div class="hero display-flex flex-align-center" style="min-height: 17vh;">
            <div class="flex-stretch">
                <div class="text-center" style="color: #fff;">
                    <h2>IT'S THAT TIME OF YEAR</h2>
                    <h4 style="color: var(--color-neutral-light);">Use Code FALLISHERE to get 30&percnt; off your entire purchase.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- *** SEARCH BAR *** -->
    <div class="container">
        <div class="form-control">
            <form id="shop-search" class="form-hotdog light">
                <input type="search" placeholder="Search Products">
            </form>
        </div>
    </div>

    <!-- *** CRUMB NAV, FILTER, & SORT *** -->
    <div class="container">
        <div class="grid gap">

            <nav class="nav nav-crumbs col-xs-12 col-sm-12 col-md-5 col-lg-6" style="margin-top: 0rem !important;">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php?category=<?=$_GET['category']?>"><?=$_GET['category']?></a></li>
                </ul>
            </nav>

            <!--
            <div class="flex-none display-flex">
                <div class="flex-none">
                    <button data-filter="type" data-value="" type="button" class="form-button dark">All</button>
                </div>
                <div class="flex-none">
                    <button data-filter="type" data-value="t-shirt" type="button" class="form-button dark">Shirt</button>
                </div>
                <div class="flex-none">
                    <button data-filter="type" data-value="scarf" type="button" class="form-button dark">Scarf</button>
                </div>
            </div>
            -->

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                <div class="form-select">
                    <select class="js-filter">
                        <option>Filter By</option>
                        <option value="0">All Products</option>
                        <optgroup label="Audience">
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Teen</option>
                            <option value="4">Kids</option>
                        </optgroup>
                        <optgroup label="Apparel" data-filter="type">
                            <option value="5">T-shirts</option>
                            <option value="6">Sweaters</option>
                            <option value="7">Scarves</option>
                            <option value="8">Jackets</option>
                            <option value="9">Hoodies</option>
                            <option value="10">Hats</option>
                            <option value="11">Button-Down Shirt</option>
                        </optgroup>
                    </select>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="form-select">
                    <select class="js-sort">
                        <option value="1">Sort By</option>
                        <option value="2">Top Rated</option>
                        <option value="3">Price&colon; Low to High</option>
                        <option value="4">Price&colon; High to Low</option>
                        <option value="5">Name&colon; A to Z</option>
                        <option value="6">Name&colon; Z to A</option>
                    </select>
                </div>
            </div>

        </div>
    </div>

    <!-- *** PRODUCT LIST *** -->
    <div class="container">
        <div class='shop-list grid gap'></div>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>

</html>