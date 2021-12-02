<?php


session_start();


function print_p($v) {
    echo "<pre>",print_r($v),"</pre>";
}


function file_get_json($filename) {
    $file = file_get_contents($filename);
    return json_decode($file);
}



//Connect to mySQL database info (from auth php info)

include "auth.php";

function makeConn() {
    // Connect to database using spread operator (...) that spreads out values in the function as an array
    $conn = new mysqli(...MYSQLIAuth());
    // Check the connection for errors and it dies if there are any
    if($conn->connect_errno) die($conn->connect_error);
    // Makes sure there's no weird characters (using the biggest possible character set known as utf8)
    $conn->set_charset('utf8');
    return $conn;
}


// This function gets passed a connection and a query that it can use
function makeQuery($conn,$qry) {
    // Run that query
    $result = $conn->query($qry);
    // Check the connection for any errors
    if($conn->errno) die ($conn->error);
    $a = [];
    // Look through query string
    while($row = $result->fetch_object()) {
        // Take empty array $a and push one item onto it that is every row that is a result from our query
        $a[] = $row;
    }
    return $a;
}



// *** CART FUNCTIONS ***

// array_find will loop through the array, call a function on each item in the array, and if it earns a "true" from that function, it returns that object
function array_find($array,$fn) {
    // foreach through each item in the array passed into this, refer to each one as $o (the current object)
    // if we call our function the current object and it returns true, we stop the function and return that object
    foreach($array as $o) if($fn($o)) return $o;
    // if we loop through the whole thing and don't find one that matches, we return false
    return false;
}

function getCart() {
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

// $p are the $_POST values passed into the function
function addToCart($id,$quantity,$color) {
    // Create cart array from product ids clicked
    //$_SESSION['cart'][] = $p['product-id'];
    $cart = getCart();

    $p = array_find($cart,function($o) use($id) {
        // Need item to match color, quantity, id, and size
        return $o->id==$id;
        /*return $o->color==$color;
        return $o->size==$size;
        return $o->quantity==$quantity;*/
    });

    if($p) {
        $p->quantity += $quantity;
    } else {
        $_SESSION['cart'][] = (object) [
            "id"=>$id,
            "quantity"=>$quantity,
            "color"=>$color
        ];
    }
}


function resetCart() {
    $_SESSION['cart'] = [];
}


function cartItemById($id) {
    return array_find(getCart(),function($o)use($id){return $o->id==$id;});
}


function makeCartBadge() {
    $cart = getCart();
    if (count($cart)==0) {
        return "";
    } else {
        return array_reduce($cart,function($r,$o){return $r+$o->quantity;},0);
    }
}


function getCartItems() {
    $cart = getCart();

    if(empty($cart)) return [];

    $ids = implode(",",array_map(function($o){return $o->id;},$cart));
    $data = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN ($ids)");

    return array_map(function($o) use ($cart) {
        $p = cartItemById($o->id);
        $o->quantity = $p->quantity;
        $o->total = $p->quantity * $o->price;
        return $o;
    },$data);
}