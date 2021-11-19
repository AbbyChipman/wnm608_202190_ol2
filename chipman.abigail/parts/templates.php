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
        <img src="img/$o->image_main" alt="$o->description">
        <figcaption>
            <div class="caption-body">
                <div class="product-price">&dollar;$o->price</div>
                <div class="product-title">$o->title</div>
                <a href="product_item.php?id=$o->id">Learn More</a>
            </div>
        </figcaption>
    </figure>
</div>
HTML;
}

function selectQuantity($quantity=1,$total=10) {
   $output = "<select name='quantity'>";
   for($i=1;$i<=$total;$i++) {
       $output .= "<option ".($i==$quantity?"selected": "").">$i</option>";
   }
   $output .= "</select>";
   return $output;
}

function cartListTemplate($r,$o) {
    $totalfixed = number_format($o->total,2,'.','');
    $selectquantity = selectQuantity($o->quantity,10);

return $r.<<<HTML
<div class="display-flex flex-align-center">
    <div class="flex-none cart-thumb">
        <img src="img/$o->image_main" alt="$o->description">
    </div>
    <div class="flex-stretch">
        <h2 class="checkout-title">$o->title</h2>
        <form action="cart_actions.php?action=delete-cart-item" method="post">
            <input type="hidden" name="id" value="$o->id">
            <input type="submit" class="form-button-light inline" value="Delete" style="font-size:0.8em">
        </form>
    </div>
    <div class="flex-none checkout-price">
        <div>&dollar;$totalfixed</div>
        <form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
            <input type="hidden" name="id" value="$o->id">
            <div class="form-select" style="font-size:0.8em;">
                $selectquantity
            </div>
        </form>
    </div>
    
</div>
HTML;
}

function cartTotals() {
    $cart = getCartItems();

    $cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

    $pricefixed = number_format($cartprice,2,'.','');
    $taxfixed = number_format($cartprice*0.065,2,'.','');
    $grandtotal = number_format($cartprice*1.065,2,'.','');

return <<<HTML
<div class="card soft light">
    <div class="card hard display-flex">
        <div class="flex-none">
            <strong>Sub-Total</strong>
        </div>
        <div class="flex-stretch"></div>
        <div class="flex-none checkout-price">
            &dollar;$pricefixed</div>
    </div>
    <div class="card hard display-flex">
        <div class="flex-none">
            <strong>Taxes</strong>
        </div>
        <div class="flex-stretch"></div>
        <div class="flex-none checkout-price">
            &dollar;$taxfixed</div>
        </div>
        <hr>
    <div class="card hard display-flex">
        <div class="flex-none">
            <strong>Total</strong>
        </div>
        <div class="flex-stretch"></div>
        <div class="flex-none checkout-price">
            &dollar;$grandtotal</div>
    </div>
</div>
HTML;
}