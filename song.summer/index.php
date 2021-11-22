<?php include_once "lib/php/function.php";?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <?php include "parts/meta.php"; ?>

</head>
<body>
	
<?php include "parts/navbar.php"; ?>

    <div class="view-window" style="background-image:url('../song.summer/img/yoga.jpg')"></div>





	<div class="container">
		<article class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Trending Products</h2>
				</div>
			</div>

			<div class="content cnt23">
			<?php

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

	<ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>

</html>