<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php";
include_once "lib/php/functions.php";

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

    <div class="view-window-small" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="display-flex">
                <div class="flex-stretch"></div>
                <div class="flex-none">
                    <div class="card section rainbow">
                        <h2><?= $product->title?></h2>
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

            <?php include "parts/prod_info.php" ?>

            
        </div>
    </div>
</body>
</html>