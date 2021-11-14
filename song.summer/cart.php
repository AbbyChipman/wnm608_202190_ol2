<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Look and Fit - Cart</title>
	<link rel="stylesheet" href="css/gridsystem.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- JQUERY-->

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="card soft">
            <h1 class="main_title" id="back_to_the_top"> <a href="index.php">Look and Fit</a> </h1>
            <nav id="main_nav">
                <ul class="main_nav2">
                    <li class="flex-stretch"><a href="index.php">Home</a></li>
                    <li class="flex-stretch"><a href="active_wear.php">Active Wear</a></li>
                    <li class="flex-stretch"><a href="about.php">About</a></li>
                    <li class="flex-stretch"><a href="cart.php">Cart</a></li>
					<li class="flex-stretch"><a href="admin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </div>

	<script>
		$("#navigations a").on("click", function (e) {
			e.preventDefault();
			$(this).closest("li").addClass("active")
				.siblings().removeClass("active")
		})
	</script>
     


	<div class="container">

		<article class="card soft">
			<h2>Shpping Cart</h2>
           <div class="grid gap">
			   <div class="col-xs-12 col-md-7">
				   <div class="card soft">
					   <?= array_reduce($cart,'cartListTemplate') ?>
				   </div> 
			   </div>
			   <div class="col-xs-12 col-md-5">
				   <div class="card soft flat">
					   <div class="card-section disply-flex">
						   <div class="flex-stretch"><strong>Amount</strong></div>
						   <div class="flex-none">&dollar;19.00</div>
					   </div>
					   <div class="card-section disply-flex">
						   <div class="flex-stretch"><strong>Taxes</strong></div>
						   <div class="flex-none">&dollar;1.09</div>
					   </div>
					   <div class="card-section disply-flex">
						   <div class="flex-stretch"><strong>Total Amount</strong></div>
						   <div class="flex-none">&dollar;20.09</div>
					   </div>
					   <div class="card-section">
						   <a href="product_checkout.php" class="form-button">Checkout</a>
					   </div>
				   </div>
			   </div>
		   </div>
			<button type="button" class="form-button button2"> <a href="product_checkout.php"> Check Out </a></button>
			<div class="cart"></div>
			</div>
		</article>
	</div>

	<ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>

</html>