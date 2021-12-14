<?php 
include_once "lib/php/functions.php"; 
include_once "parts/template.php"; 
$cart= getCartItems();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Checkout</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
<?php include "parts/navbar.php"; ?>
		

<div class="container">
	<div class="grid gap">
	<div class="col-xs-12 col-md-7">
	<div class=" card soft">
		<h2>Product Checkout</h2>

		<form>
				<div class="form-control display-flex">
					<div class="flex-none">
					<label class=".form-label">Name</label>
					</div>
					<div class="flex-stretch">
					<input type="text" placeholder="Text" class="form-input">
					</div>
					<div class="flex-none">
					<label class=".form-label">Billing Address</label>
					</div>
					<div class="flex-stretch">
					<input type="text" placeholder="Text" class="form-input">
					</div>
				</div>
				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
					<label class=".form-label">Debit / Credit Card Number</label>
					</div>
					<div class="flex-stretch">
					<input type="password" placeholder="" class="form-input">
					</div>
					<div class="flex-none">
					<label class=".form-label">Expiration Date</label>
					</div>
					<div class="flex-stretch">
					<input type="password" placeholder="**/**" class="form-input">
					</div>
					<div class="flex-none">
					<label class=".form-label">CVS Code</label>
					</div>
					<div class="flex-stretch">
					<input type="password" placeholder="CVS" class="form-input">
					</div>
				</div>
				<div class="form-control">
					<label class=".form-label">Amount</label>
					<input type="number" placeholder="Value" class="form-input"><br>
					</div>
				<div class="form-control">
					<label class=".form-label">Debit / Credit Card Number PIN Number</label>
						<input type="password" placeholder="Password" class="form-input"><br>
						</div>
				<div class="form-control">
					<label class=".form-label">Search</label>
					<input type="search" placeholder="Search" class="form-input"><br>
					</div>

		<div class="form-control">
		<!--<button type="button" class="form-button">Complete Checkout</button>-->
		<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
		</div>
		</form>
		</div>
	</div>

		<div class="col-xs-12 col-md-5">
			<div class="card soft">
				<h2>Item Review</h2>
				<div>
				<?php
				echo array_reduce($cart, function($r,$o){
					$totalfixed = number_format($o->total,2,'.','');
					return $r."<div class='display-flex'>
					<div class='flex-stretch'>$o->name</div>
					<div class='flex-none'>&dollar;$totalfixed</div>
					</div";
				}) ?>
			</div>
			<?= cartTotals(); ?>
			</div>
		</div>
	</div>
	</div>

</body>
</html>