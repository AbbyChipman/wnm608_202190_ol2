<?php

include_once "lib/php/function.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation Page</title>

    <?php include "parts/meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container">

		<article class="card soft">
	
		<h2>You added <?= $product->name ?> to your cart.</h2>
		<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart. </p>
        <div class="display-flex">
                <div class="flex-none form-button4"><a href="active_wear.php">Continue Shopping</a></div>
                <div class="flex-stretch"><a href="active_wear.php"></a></div>
                <div class="flex-none form-button5"><a href="cart.php">Go to Cart</a></div>
        </div>
            </div>

			<div class="cart"></div>
			</div>
		</article>
	</div>

	<ul class="table_of"><a href="index.php">BACK TO HOME PAGE</a></ul>
    <footer> <p class="footer">Look and Fit @2021</p> </footer>
</body>
</html>
