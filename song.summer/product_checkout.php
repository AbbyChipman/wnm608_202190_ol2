<?php 
include_once "lib/php/function.php";
include_once "parts/templates.php";
$cart = getCartItems();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Page</title>

    <?php include "parts/meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

<div class="container check"> 
<div class="grid gap">

<div class="col-xs-12 col-md-5"> 
        <div class="card soft">
        <h2> Item Review </h2>
            <div class="card-section">
            
            <?php
             echo array_reduce($cart,function($r,$o){
                $totalfixed = number_format($o->total, 2, '.','');
                return $r. "<div class = 'display-flex'>
                <div class = 'flex-stretch'>$o->name</div>
                <div class = 'flex-none'>&dollar;$totalfixed</div>
                </div>";

            }) ?>
            </div>
            <?= cartTotals(); ?>
    </div>
    </div>


    <div class="col-xs-12 col-md-6">
		<div class="card soft">
            <h2>Product Checkout</h2>
			<h3>Address</h3>
            <form>
            <div class="form-control">
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="Address 1" class="form-input">
                </div>
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="Address 2" class="form-input">
                </div>
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
            
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="form-control flex-none">
                    <label class="form-label"></label>
                    <input type="text" placeholder="City" class="form-input"><br>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="State" class="form-input">
                </div>
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="form-control flex-none">
                    <input type="number" placeholder="Zipcode" class="form-input">
                </div>
                <div class="form-control">
                <label class="form-label"></label>
                <input type="number" placeholder="Country" class="form-input"><br>
            </div>
            </div>
            
           

        </form>
		
        <h3>Credit Card</h3>
            <form>
            <div class="form-control display-flex">
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="First Name" class="form-input">
                </div>
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="Last Name" class="form-input">
                </div>
            </div>
            <div class="form-control display-flex flex-align-center">
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
            
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="form-control flex-none">
                    <label class="form-label"></label>
                    <input type="text" placeholder="Credit Card #" class="form-input"><br>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="Expiration Date" class="form-input">
                </div>
                <div class="flex-none">
                    <label class="form-label"></label>
                </div>
                <div class="flex-stretch">
                    <input type="text" placeholder="CVV" class="form-input">
                </div>
            </div>
            <div class="form-control">
                <label class="form-label"></label>
                <input type="number" placeholder="Amount" class="form-input"><br>
            </div>
       
			<div class="cart"></div>
            <button type="button" class="button-default"> <a href="confirmation_page.php"> Complete Checkout </a></button>
			</div>  
        </form>
        </div>


    </div>
</div>

	<ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
    <footer> <p class="footer">Look and Fit @2021</p> </footer>
</body>
</html>
