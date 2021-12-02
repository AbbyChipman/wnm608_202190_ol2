<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
    "name"=>"",
    "price"=>"",
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

    // if it's TRUE that our condition "$id" equals "new", then the value is "Add"; Otherwise the value is "Edit"
    $addoredit = $id == "new" ? "Add" : "Edit";  
    $createorupdate = $id == "new" ? "create" : "update";
    $images = explode(", ", $o->images);
    
//heredoc, last line HTML; must be completely on the left
$display = <<<HTML
<div class="card-light" style="text-align: left;">
    <h3>$o->name</h3>
    <div>
        <strong>Type&colon;</strong>
        <span>$o->type</span>
    </div>
    <div>
        <strong>Category&colon;</strong>
        <span>$o->category</span>
    </div>
    <div>
        <strong>Images&colon;</strong>
        <span>$images</span>
    </div>
</div>
HTML;


$form = <<<HTML
<div class="card-light">
    <h3>$addoredit User</h3>
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <div class="form-control">
            <label class="form-label" for="product-name">Name</label>
            <input type="text" class="form-input" value="$o->name" name="product-name" id="product-name" placeholder="Enter the Product Name">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-type">Type</label>
            <input type="text" class="form-input" value="$o->type" name="product-type" id="product-type" placeholder="Enter the Product Type">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-category">Category</label>
            <input type="text" class="form-input" value="$o->category" name="product-category" id="product-category" placeholder="Enter the Product Category">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-images">Images</label>
            <input type="text" class="form-input" value="$images" name="product-images" id="product-images" placeholder="Enter the Product Images, comma separated">
        </div>
        <div class="form-control">
            <input type="submit" class="form-button form-control" value="Save Changes">
        </div>
    </form>
</div>
HTML;


$output = $id == "new" ? $form : 
    "<div class='grid gap'>
        <div class='col-xs-12 col-md-7'>$display</div>
        <div class='col-xs-12 col-md-5'>$form</div>
    </div>
    ";


$delete = $id == "new" ? : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card-light" style="margin-bottom: 3rem;">
    <nav class="display-flex">
        <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
        <div class="flex-none">$delete</div>
    </nav>
</div>
$output
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
            echo showProductPage(
                // if the product is new, it's an empty product, otherwise we make a query of the product with that id
                $_GET['id'] == "new" ?
                    $empty_product : 
                    makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
            );
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