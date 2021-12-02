<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
    "name"=>"",
    "price"=>"",
    "date_create"=>"",
    "date_modify"=>"",
    "description"=>"",
    "type"=>"",
    "category"=>"",
    "size"=>"",
    "color"=>"",
    "thumbnail"=>"",
    "images"=>""
];


// *** TEMPLATES ***

function productListItem($r,$o) {
return $r.<<<HTML
<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id" style='padding-left: 0;'>$o->name</a></div>
HTML;
}


function showProductPage($o) {
return <<<HTML
<div>$o->name</div>
<div>$o->price</div>
HTML;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin Page</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>

    <header class="navbar">
        <div class="container display-flex" style="margin-bottom: 0;">
            <div class="flex-none">
                <h5>Product Admin</h5>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="container" style="padding-top: 3rem;">

        <?php

        if(isset($_GET['id'])) {
            showProductPage(
                // if the product is new, it's an empty product, otherwise we make a query of the product with that id
                $_GET['id']=="new" ?
                    $empty_product : 
                    makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
            );
            // showProductPage();
        } else {

        ?>

            <h3>Product List</h3>

            <?php 

            // Select everything from Products and turn that into a result array (using the makeQuery function we have written)
            $result = makeQuery(makeConn(),"SELECT * FROM `products`");

            echo array_reduce($result,'productListItem');
            
            ?>

        <?php } ?>

    </div>

</body>