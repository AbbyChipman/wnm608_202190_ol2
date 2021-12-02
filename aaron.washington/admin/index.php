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

    $id = $_GET['id'];
    // if it's TRUE that our condition "$id" equals "new", then the value is "Add"; Otherwise the value is "Edit"
    $addoredit = $id == "new" ? "Add" : "Edit";  
    $createorupdate = $id == "new" ? "create" : "update";
    $images = array_reduce(explode(", ", $o->images),function($r,$o){return $r."<img src='img/$o'>";});
    
//heredoc, last line HTML; must be completely on the left
$display = <<<HTML
<div class="card-light" style="text-align: left;">
    <h3>$o->name</h3>
    <div class="form-control">
        <label class="form-label">Price&colon;</label>
        <span>$o->type</span>
    </div>
    <div class="form-control">
        <label class="form-label">Category&colon;</label>
        <span>$o->category</span>
    </div>
    <div class="form-control">
        <label class="form-label">Description&colon;</label>
        <span>$o->description</span>
    </div>
    <div class="form-control">
        <label class="form-label">Thumbnail&colon;</label>
        <span class="images-thumbs"><img src='img/$o->thumbnail' /></span>
    </div>
    <div class="form-control">
        <label class="form-label">Additional Images&colon;</label>
        <span class="images-thumbs">$images</span>
    </div>
</div>
HTML;


$form = <<<HTML
<div class="card-light">
    <h3>$addoredit Product</h3>
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <div class="form-control">
            <label class="form-label" for="product-name">Name</label>
            <input type="text" class="form-input" value="$o->name" name="product-name" id="product-name" placeholder="Enter the Product Name">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-type">Price</label>
            <input type="number" class="form-input" min="0" max="1000" step="0.01" value="$o->price" name="product-price" id="product-price" placeholder="Enter the Product Price">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-category">Category</label>
            <input type="text" class="form-input" value="$o->category" name="product-category" id="product-category" placeholder="Enter the Product Category">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-description">Description</label>
            <textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-thumbnail">Thumbnail</label>
            <input type="text" class="form-input" value="$o->thumbnail" name="product-thumbnail" id="product-thumbnail" placeholder="Enter the Product Thumbnail">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-images">Additional Images</label>
            <input type="text" class="form-input" value="$o->images" name="product-images" id="product-images" placeholder="Enter the Additional Product Images, comma separated">
        </div>
        <div class="form-control">
            <input type="submit" class="form-button form-control" value="Save Changes">
        </div>
    </form>
</div>
HTML;


$output = $id == "new" ? "<div class='card-light'>$form</div>" : 
    "<div class='grid gap'>
        <div class='col-xs-12 col-md-7'>$display</div>
        <div class='col-xs-12 col-md-5'>$form</div>
    </div>
    ";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


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

            <div class="card-light" style="text-align: left;">

                <?php 

                // Select everything from Products and turn that into a result array (using the makeQuery function we have written)
                $result = makeQuery(makeConn(),"SELECT * FROM `products`");

                echo array_reduce($result,'productListItem');
                
                ?>

            </div>

        <?php } ?>

    </div>

</body>