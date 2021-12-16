<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php";
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images_other);

$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='img/$o'>";
});

?>

<script src="js/product_thumbs.js"></script>
    <title><?= $product->title ?></title>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="view-window-small flex-align-center" style="background-image:url(lib/img/glitter-background.jpg);">
    <div class="container">
        <div class="grid">
            <div class="col-xs-12 col-sm-0 col-md-0"></div>
            <div class="col-xs-12 col-sm-3 col-md-6"></div>
            <div class="col-xs-12 col-sm-9 col-md-6">
                <div class="card section rainbow">
                    <h2><?= $product->title ?></h2>
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
                    <li><a href="#"><?= $product->title ?></a></li>
                </ul>
            </div>

            <div class="grid gap">
                <div class="col-xs-1 col-sm-5 col-md-2">
                    <div class="image-thumb">
                        <?= $image_elements ?>
                    </div>
                </div>
                <div class="col-xs-0 col-sm-0 col-md-0"></div>
                <div class="col-xs-11 col-sm-7 col-md-5">
                    <div class="image-main">
                        <img src="img/<?= $product->image_main ?>" alt="<?= $product->description ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">

                    <div class="grid gap">
                        <div class="col-xs-12 col-md-12">
                            <h2><?= $product->title ?></h2>
                            <h3>Category: <?= $product->category ?></h3>
                            <p><?= $product->description?></p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <form method="post" action="cart_actions.php?action=add-to-cart">
                            <input type="hidden" name="product-id" value="<?= $product->id ?>">
                        </div>
                        <div class="col-xs-3 col-md-3">
                            <label for="quantity" class="form-label">Amount:</label>
                                <div class="form-select">
                                    <select id="quantity"  name="quantity">
                                        <option value="1"style="text-align: center;">1</option>
                                        <option value="2"style="text-align: center;">2</option>
                                        <option value="3"style="text-align: center;">3</option>
                                        <option value="4"style="text-align: center;">4</option>
                                        <option value="5"style="text-align: center;">5</option>
                                        <option value="6"style="text-align: center;">6</option>
                                        <option value="7"style="text-align: center;">7</option>
                                        <option value="8"style="text-align: center;">8</option>
                                        <option value="9"style="text-align: center;">9</option>
                                        <option value="10"style="text-align: center;">10</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-xs-5 col-md-5"></div>
                        <div class="col-xs-4 col-md-4">
                            <label for="price" class="form-label">Price Each:</label>
                            <div class="checkout-price hotdog" id="price" name="price" style="text-size:1.5em; text-align: center">&dollar;<?= $product->price ?></div>
                        </div>
                        <div class="col-xs-6 col-md-6"></div>
                        <div class="col-xs-3 col-md-0"></div>
                        <div class="col-xs-6 col-md-6">
                            <input type="submit" class="form-button" value="Add to Cart">
                        </div>
                        <div class="col-xs-3 col-md-0"></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="card soft">
            <h2>Recommended Products</h2>
            <?php 
                recommendedSimilar($product->category,$product->id);
            ?>
        </div>
    </div>
</body>
</html>