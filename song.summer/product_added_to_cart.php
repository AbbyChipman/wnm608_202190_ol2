<?php

include_once "lib/php/function.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

// print_p($product);

?>

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
	
		<h2>You added <?= $product->name ?> to your cart</h2>
            <div class="display-flex">
                <div class="flex-none"><a href="active_wear.php">Continue Shopping</a></div>
                <div class="flex-stretch"><a href="active_wear.php"></a></div>
                <div class="flex-none"><a href="cart.php">Go to Cart</a></div>
            </div>

			<div class="cart"></div>
			</div>
		</article>
	</div>

	<ul class="table_of"><a href="index.php">BACK TO HOME PAGE</a></ul>
</body>

</html>