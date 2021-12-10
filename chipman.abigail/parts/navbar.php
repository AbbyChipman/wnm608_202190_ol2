<?php

include_once "lib/php/functions.php";

?>
<input type="checkbox" id="menu" class="hidden">

<header class="navbar">
        <div class="container display-flex flex-align-center flex-justify-center">
            <div class="flex-none flex-align-center flex-justify-center">
            <a href="index.php"><img src="img/logoColorNav.png" alt="AbbyDazzled Logo" class="nav-logo"></a>
            </div>
            <div class="flex-stretch"></div>
            <div class="flex-none menu-button">
                <label for="menu">&equiv;</label>
            </div>
            <nav class="nav nav-flex">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="product_list.php">Store</a></li>
                    <li><a href="cart.php">
                        <span>Cart</span>
                        <span class="badge"><?= makeCartBadge(); ?></span>
                    </a></li>
                </ul>
            </nav>
        </div>
    </header>