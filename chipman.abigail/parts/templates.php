<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-3">
    <a href="product_item.php?id=$o->id">
    <figure class="figure product display-flex flex-column">
    <div class="flex-stretch">
    <img src="img/$o->image_main" alt="$o->description">
    </div>
    <figcaption class="flex-none">
        <div class="product-price">&dollar;$o->price</div>
        <div class="product-title">$o->title</div>
    </figcaption>
    </figure>
    </a>
</div>
HTML;
}

function featuredListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
    <figure class="figure product-overlay">
        <img src="img/logoColor.png" alt="AbbyDazzled Logo">
        <figcaption>
            <div class="caption-body">
                <div class="product-price">$3.99</div>
                <div class="product-title">Product Name</div>
                <a href="product_item.php?id=3">Learn More</a>
            </div>
        </figcaption>
    </figure>
</div>
HTML;
}

function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex flex-align-center">
    <div class="flex-none image-thumb">
        <img src="img/$o->image_main" alt="$o->description">
    </div>
    <div class="flex-stretch">
        <strong class="checkout-title">$o->title</strong>
        <div class="checkout-price">Delete</div>
    </div>
    <div class="flex-none checkout-price">
        &dollar;$o->price
    </div>
</div>
HTML;
}