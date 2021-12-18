<?php 
include_once "lib/php/function.php";
include_once "parts/templates.php";

resetCart(); 
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>
</head>

<body>



	<div class="container">
	<?php include "parts/navbar.php"?>

		<article class="container card soft">
			<h2>Confirmation Page</h2>
			<div class="card soft"> 
            <p>Thank you! A confirmation has been sent to your email!</p>
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