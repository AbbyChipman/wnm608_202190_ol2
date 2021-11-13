<?php
/*
include_once "lib/php/functions.php";
include_once "parts/templates.php";

// Call mySQL database
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
        <!--<div class="display-flex">-->
            <nav class="nav nav-crumbs flex-stretch">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php?category=<?=$_GET['category']?>"><?=$_GET['category']?></a></li>
                </ul>
            </nav>
            <!--<div class="flex-none">
                <p>Filter By&colon;&nbsp;<div class="form-select">
                    <select style="padding: 0.5rem 1.5rem 0.5rem 0.5rem;">
                        <option><a href="?category=Everything">Everything</a></option>
                        <option><a href="?category=Men">Men</a></option>
                        <option><a href="?category=Women">Women</a></option>
                        <option><a href="?category=Teen">Teen</a></option>
                        <option><a href="?category=Kids">Kids</a></option>
                    </select>
                </div></p>
                
            </div>
        </div>-->
    </div>

    <!-- *** PRODUCT LIST *** -->
    <div class="container">
        <?php

        // include_once helps with pulling more than one file from the same folder (there's two lib files on this page)
        include_once "lib/php/functions.php";
        include_once "parts/templates.php";

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
        echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

        ?>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>

</html>