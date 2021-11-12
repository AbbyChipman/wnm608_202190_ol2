<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>
    
    <title id="name">Products</title>
</head>
<body>
    <?php include "parts/navbar.php" ?>
    
    <div class="view-window-small flex-align-center" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="grid">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <div class="card section rainbow">
                        <h2>Product List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <div class="nav nav-crumbs">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product_list.php">Products</a></li>
                </ul>
            </div>
            
           

            <?php
            
            include_once "lib/php/functions.php";
            include_once "parts/templates.php";

            $result = makeQuery(
                makeConn(), 
                "
                SELECT * 
                FROM `products`
                ORDER by `date_create` DESC
                LIMIT 12
                "
            );

            echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

            ?>
        </div>
    </div>
</body>
</html>