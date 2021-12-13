<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// Call mySQL database
$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

// Explode out list of images in database
$images = explode(",", $product->images);

// Use array_reduce to select individual images from the list and produce them as an img src
$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='img/$o' />";
});

$image_main = $images[0];

// Explode out size options list for dropdown
$sizes = explode(",", $product->size);

$size_elements = array_reduce($sizes,function($r,$o){
    return $r."<option>$o</option>";
});

// Explode out color options list for dropdown
$colors = explode(",", $product->color);

$color_elements = array_reduce($colors,function($r,$o){
    return $r."<option>$o</option>";
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>

    <script src="js/product_thumbs.js"></script>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <!-- *** CRUMB NAV *** -->
    <div class="container" style="padding-left: 1.5rem !important;">
        <nav class="nav nav-crumbs">
            <ul style="margin-left: 0;">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php?category=<?= $_GET['category'] ?>"><?= $_GET['category'] ?></a></li>
                <li class="active"><a href="#"><?= $_GET['type'] ?></a></li>
            </ul>
        </nav>
    </div>

    <!-- *** PRODUCT CONTENT *** -->
    <br />
    <br />
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align: center;">
                <div class="images-main">
                    <img src="img/<?= $image_main ?>"
                        alt="<?= $product->name ?> &ndash; <?= $product->category ?>"
                        title="<?= $product->name ?> &ndash; <?= $product->category ?>" />
                </div>
                <div class="images-thumbs">
                    <?= $image_elements ?>
                </div>
            </div>
            <form class="col-xs-12 col-sm-12 col-md-6 product-text" method="post" action="cart_actions.php?action=add-to-cart">
                <input type="hidden" name="product-id" value="<?= $product->id ?>">
                <h3><?= $product->name ?></h3>
                <p style="margin-bottom: 1rem;"><?= $product->type ?></p>
                <h4 style="margin-bottom: 1rem;"><b>&dollar;<?= $product->price ?></b></h4>
                <p><?= $product->description ?></p>
                <br />
                <h5>Color</h5>
                <div class="form-select form-control" style="width: 12rem;">
                    <select id="product-color" name="product-color">
                        <?= $color_elements ?>
                    </select>
                </div>
                <br />
                <h5>Size</h5>
                <div class="form-select form-control" style="width: 6rem;">
                    <select id="product-size" name="product-size">
                        <?= $size_elements ?>
                    </select>
                </div>
                <br />
                <h5>Quantity</h5>
                <div class="form-select form-control" style="width: 6rem;">
                    <select id="product-quantity" name="product-quantity">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
                <br />
                <input type="submit" class="form-button add-cart" value="Add to Cart">
            </form>

        </div>
    </div>

    <!-- *** RECOMMENDED PRODUCTS *** -->
    <br />
    <div class="container">
        <h4 style="margin-bottom: 1rem;">You'll probably like these too<h4>
        <?php

        recommendedSimilar($product->type,$product->id);

        ?>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>
    
</body>
</html>