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
        <div class="hero display-flex flex-align-center" style="min-height: 17vh; margin-top: 7rem;">
            <div class="flex-stretch">
                <div class="text-center discount-text" style="color: #fff;">
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
                        <option value="everything">All Products</option>
                        <optgroup label="Audience">
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="teen">Teen</option>
                            <option value="kids">Kids</option>
                        </optgroup>
                        <optgroup label="Apparel" data-filter="type">
                            <option value="t-shirt">T-shirts</option>
                            <option value="sweater">Sweaters</option>
                            <option value="scarf">Scarves</option>
                            <option value="jacket">Jackets</option>
                            <option value="hoodie">Hoodies</option>
                            <option value="headwear">Hats</option>
                            <option value="button down shirt">Button-Down Shirt</option>
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