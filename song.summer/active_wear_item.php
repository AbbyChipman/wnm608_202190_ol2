<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='img/$o'>";
});

// print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div class="container">
    <link rel="stylesheet" href="css/storetheme.css">

        <article class="article card soft">
            

            <?php include "parts/meta.php"?>
            <script src="js/product_thumbs.js"></script>

</head>
<body>

            <?php include "parts/navbar.php"?>
            <h2>Item Details</h2>            
 
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-md-6">
                <div class="card soft">
                <div class="images-main">
                    <img src="img/<?= $product->thumbnail ?>"></div>
                <div class="images-thumbs">
                    <?= $image_elements ?>
                </div>
               
        </div>

        <div class="card soft medium">
        <p class="product_description" ><?= $product->description ?></p>
            </div>
    </div>

            <div class="col-xs-12 col-md-6">
                <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

                <input type="hidden" name="product-id" value="<?=$product->id ?>">

                    <div class="card-section">
                        <h2 class="product-name"><?= $product->name ?></h2>
                    <div class="product-price">&dollar;<?= $product->price ?> </div></div>

                    <div class="card-section">
                        <div class="form-control">
                        <label for="product-amount" class="form-label">Amount</label>
                       <div class="form-select">
                        <select id="product-amount" name="product-amount">
                            <option>1</option>
                            <option>2</option>
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
                    </div>
                    <div class="form-control">
                    <label for="product-color" class="form-label">Color</label>
                    <div class="form-select">
                        <select id="product-color" name="product-color">
                            <option>Red</option>
                            <option>Black</option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <div class="card-section">
                        <input type="submit" class="form-button" value="Add to Cart">
                    </div>
                </form>
            
            </div>
        </div>  

        
        <h2>Recommended Products</h2>
        <?php
            recommendedSimilar($product->category,$product->id)
        ?>

    </div>

  
    <ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
    <footer> <p class="footer">Look and Fit @2021</p> </footer>
</body>

</html>