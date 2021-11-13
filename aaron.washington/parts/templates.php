<?php

// Every time this runs, it is passed the currently reducing object and the current object in the loop
// $r is currently reducing value, $o is current object in the loop
function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
    <a href="product.php?id=Mens&prd=Tshirt1">
        <figure class="figure product-overlay">
            <img src="img/$o->thumbnail" alt="Placeholder image" />
            <figcaption>
                <div class="caption-body">
                    <div>$o->name</div>
                    <div>&dollar;$o->price</div>
                </div>
            </figcaption>
        </figure>
    </a>
</div>
HTML;
}

?>