<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Look and Fit - Home </title>
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
     
		<div class="view-window" style="background-image:url('../song.summer/img/yoga.jpg')">
		</div>


	<div class="container">
		<article class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Trending Products</h2>
				</div>
			</div>

			<div class="content cnt23">
			<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$result = makeQuery(
	makeConn(),
"
SELECT *
FROM `products`
ORDER BY `price` ASC
LIMIT 3
"

);

echo "<div class='grid gap'>" ,array_reduce($result,'productListTemplate'),"</div>";
?>
				<ul class="table_of"><a href="active_wear.php">More Products</a></ul>
		</article>



		<article class="card soft">
			<h2>Special Offers</h2>
			<div class="sale_flyer"></div>
			</div>
		</article>
	</div>



	<div class="container">

		<article class="card soft">
			<h2>New Memeber Benefits</h2>
			<div class="member_gift"></div>
			</div>
		</article>
	</div>

	<ul class="more_products"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>

</html>