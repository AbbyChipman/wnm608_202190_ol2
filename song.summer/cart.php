<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$cart_items = getCartItems();

$cart = getCart();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>

    <?php include "parts/meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container card soft">
			<h2>Shpping Cart</h2>

			<?php

			if(count($cart)){
				?>
				<div class="grid gap">
				<div class="card col-xs-12 col-md-7">
					<div class="cart_items">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div> 
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="card soft flat cart_totals">
					<?= cartTotals() ?>
					<div class="card-section">
					<a href="product_checkout.php" class="form-button">Checkout</a>
    </div>
					</div> 
				</div>
			</div>
			<?php
			} else {
				?>
				<div>
					<div class="card soft"><p> There are no items in your cart </p> </div>
					<h3>Other Recommendations</h3>
					<?php recommendedAnything(6); ?> 
				</div>
				<?php
			}
			?>		
		 </div>
   
    <ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
	<footer> <p class="footer">Look and Fit @2021</p> </footer>
</body>
</html>