<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";
    
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activewear</title>

    <?php include "parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container card soft">
        <h2>Activewear</h2>

        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Items">
            </form>
        </div>

        <div class="form-control">
        <div class=" soft">
<div class="display-flex flex-wrap">
    <div class="flex-stretch display-flex">
         
                <div class="flex-none">
                    <button data-filter="category" data-value ="" type="button" class="form-button">All</button>
                </div>

                <div class="flex-none">
                    <button data-filter="category" data-value ="tops" type="button" class="form-button">Tops</button>
                </div>

                <div class="flex-none">
                    <button data-filter="category" data-value ="bottoms" type="button" class="form-button">Bottoms</button>
                </div>

                <div class="flex-none">
                    <button data-filter="category" data-value ="outers" type="button" class="form-button">Outers</button>
                </div>
        
        </div>
      
    <div class="flex-none">
            <div class="form-select">
                         <select class="js-sort">
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                                <option value="3">Low to High</option>
                                <option value="4">High to Low</option>
                         </select>
                </div>     
             </div> 
             </div>
        </div>
    </div>

    <div class='productlist grid gap'></div>
    </div>
    <ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
    <footer> <p class="footer">Look and Fit @2021</p> </footer>
</body>
</html>