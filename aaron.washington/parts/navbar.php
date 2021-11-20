<?php

include_once "lib/php/functions.php";

?>

<header class="display-flex flex-align-center navbar">
    <div class="flex-none">
        <a href="#">
            <div class="home-logo"></div>
        </a>
    </div>
    <div class="flex-none">
        <a href="index.php">
            <h5>esome Stuff</h5>
        </a>
    </div>
    <div class="flex-stretch"></div>
    <nav class="flex-none nav">
        <ul class="display-flex">
            <li><a href="shop.php?category=Everything">What&apos;s New</a></li>
            <li><a href="shop.php?category=Everything">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="cart.php">
                <span>Cart</span>
                <span class="badge"><?= makeCartBadge(); ?></span>
            </a></li>
        </ul>
    </nav>
</header>