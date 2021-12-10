
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>
    
    <title id="name">Products</title>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
    
</head>
<body>

<?php include "parts/navbar.php" ?>

<div class="view-window-small flex-align-center" style="background-image:url(lib/img/glitter-background.jpg);">
    <div class="container">
        <div class="grid">
            <div class="col-xs-12 col-sm-2 col-md-4"></div>
            <div class="col-xs-12 col-sm-4 col-md-4"></div>
            <div class="col-xs-12 col-sm-6 col-md-4">
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
        
        <div class="grid gap">
            <div class="col-xs-12 col-md-6">
                <div class="form-control">
                    <label for="product-search">Search products</label>
                    <form class="hotdog" id="product-search">
                        <input type="search" placeholder="Search">
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="form-control">
                    <label for="product-sort">Sort by:</label>
                    <div class="form-select">
                        <select class="js-sort" id="product-sort">
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                            <option value="3">Price Low to High</option>
                            <option value="4">Price High to Low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-control">
            <div class="card soft">
                <div class="grid gap">
                    <div class="col-xs-6 col-md-2">
                        <button data-filter="category" data-value="" type="button" class="form-button-light">All</button>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <button data-filter="category" data-value="Notebooks" type="button" class="form-button-light">Notebooks</button>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <button data-filter="category" data-value="Bookmarks" type="button" class="form-button-light">Bookmarks</button>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <button data-filter="category" data-value="Pens" type="button" class="form-button-light">Pens</button>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <button data-filter="category" data-value="Sets" type="button" class="form-button-light">Sets</button>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <button data-filter="category" data-value="Accessories" type="button" class="form-button-light">Accessories</button>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="productlist grid gap"></div>
    </div>
</div>
</body>
</html>