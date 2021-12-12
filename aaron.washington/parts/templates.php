<?php

// Every time this runs, it is passed the currently reducing object and the current object in the loop
// $r is currently reducing value, $o is current object in the loop
function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
    <a href="product.php?id=$o->id&category=$o->category&type=$o->type">
        <figure class="figure product-overlay">
            <img src="img/$o->thumbnail" alt="$o->name &ndash; $o->category" title="$o->name &ndash; $o->category" />
            <figcaption>
                <div class="caption-body">
                    <h4>$o->name</h4>
                    <p>&dollar;$o->price</p>
                </div>
            </figcaption>
        </figure>
    </a>
</div>
HTML;
}


function selectQuantity($quantity=1,$total=10) {
    $output = "<select name='quantity'>";
    // variable i equals 1, while variable i less than/equal to the $total, we want to loop through and increment i
    for($i=1;$i<=$total;$i++) {
                              // if i equals the quantity, it marks the option as "selected", otherwise it prints out nothing
        $output .= "<option ".($i==$quantity?"selected":"").">$i</option>";
    }
    $output .= "</select>";
    return $output;
}


function cartListTemplate($r,$o) {

    $total_fixed = number_format($o->total,2,'.','');
    $select_quantity = selectQuantity($o->quantity,10);

return $r.<<<HTML
<div class="card-light cart-item form-control display-flex">
    <div class="flex-none images-cart">
        <img src="img/$o->thumbnail"
            alt="$o->name &ndash; $o->category"
            title="$o->name &ndash; $o->category" />
    </div>
    <div class="flex-stretch" style="padding-left: 2em;">
        <h3 style="font-size: 1.5rem;">$o->name</h3>
        <form action="cart_actions.php?action=delete-cart-item" method="post">
            <input type="hidden" name="id" value="$o->id">
            <input type="submit" class="form-button inline" value="Delete" style="font-size: 0.9rem;">
        </form>
    </div>
    <div class="flex-none">
        <div>
            <h5>&dollar;$total_fixed</h5>
        </div>
        <form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
            <input type="hidden" name="id" value="$o->id">
            <div class="form-select" style="font-size: 0.9rem;">
                $select_quantity
            </div>
        </form>
    </div>
</div>
HTML;
}


function cartTotals() {
    $cart = getCartItems();

    $cart_price = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

    $price_fixed = number_format($cart_price,2,'.','');
    $tax_fixed = number_format($cart_price*0.0725,2,'.','');
    $taxed_fixed = number_format($cart_price*1.0725,2,'.','');

return <<<HTML
<h5>Subtotal&colon;&nbsp;&dollar;$price_fixed</h5>
<h5>Taxes&colon;&nbsp;&dollar;$tax_fixed</h5>
<hr>
<h3>Total&colon;&nbsp;&dollar;$taxed_fixed</h3>
HTML;
}




function recommendedProducts($a) {

    $products = array_reduce($a,'productListTemplate');

echo <<<HTML
<div class="grid gap shop-list">$products</div>
HTML;
}


function recommendedEverything($limit=4) {
    $result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY rand() LIMIT $limit");
    recommendedProducts($result);
}


function recommendedType($typ,$limit=4) {
    $result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `type`='$typ' ORDER BY `date_create` DESC LIMIT $limit");
    recommendedProducts($result);
}


function recommendedSimilar($typ,$id=0,$limit=4) {
    $result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `type`='$typ' AND `id`<>$id ORDER BY rand() LIMIT $limit");
    recommendedProducts($result);
}


