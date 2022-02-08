<?php

include_once "lib/php/functions.php";


?>
<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex flex-wrap">
	<div class="flex-none">
		<h1>Prospect Market</h1>
	</div>
	<div class="flex-stretch flex-wrap">
		<div class="flex-none menu-button">
			<label for="menu">&equiv;</label>
		</div>
		
	</div>
	<nav class="nav nav-flex flex-none flex-wrap">
	<ul>
		<!--li*3>a[href=#]>{Link $}-->
		<li><a href="index.php">Home</a></li>
		<li><a href="product_list.php">Store</a></li>
		<li><a href="about_page.php">About</a></li>
		<!--<li><a href="adminpg/index.php">User Admin</a></li>-->
		<li><a href="adminproduct/index.php">Product Admin</a></li>
		<li><a href="product_cart.php">
			<span>Cart</span>
			<span class="badge"><?= makeCartBadge(); ?></span>
		</a></li>
		

	</ul>		
	</div>
	
	</div>
</header>