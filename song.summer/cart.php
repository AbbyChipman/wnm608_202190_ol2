<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>

    <?php include "parts/meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container">
			<h2>Shpping Cart</h2>
           <div class="grid gap">
			   <div class="col-xs-12 col-md-7">
				   <div class="card soft flat cart_items">
					   <?= array_reduce($cart_items,'cartListTemplate') ?>
				   </div> 
			   </div>
			   <div class="col-xs-12 col-md-3">
				   <div class="card soft flat cart_totals">
				   <?= cartTotals() ?>
				   </div> 
			   </div>
		   </div>		
		</div>
	</div>
    <ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>
</html>