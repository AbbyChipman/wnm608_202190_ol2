<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-3">
    <a href="product_item.php?id=$o->id">
    <figure class="figure product display-flex flex-column">
    <div class="flex-stretch">
    <img src="lib/img/$o->image_main" alt="$o->description">
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