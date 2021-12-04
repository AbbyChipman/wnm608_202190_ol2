<?php


include "../lib/php/functions.php";

$empty_product = (object)[
    "title"=>"Notebook - small",
    "price"=>"5.00",
    "category"=>"notebooks",
    "description"=>"3 x 5 inch resin notebook, cover made of resin with custom inclusions. 50 pages (25 sheets).",
    "quantity_avail"=>"10",
    "image_main"=>"nb_r_sm.jpg",
    "images_other"=>"nb_r_sm1.jpg,nb_r_sm2.jpg,nb_r_sm3.jpg"
];

//LOGIC
if (isset($_GET['action'])) {
    try {
        $conn = makePDOConn();
        switch($_GET['action']) {
            case "update":
                $statement = $conn->prepare("UPDATE
                    `products`
                    SET
                        `title`=?,
                        `price`=?,
                        `category`=?,
                        `description`=?,
                        `quantity_avail`=?,
                        `image_main`=?,
                        `images_other`=?,
                        `date_modify`=NOW()
                    WHERE `id`=?
                    ");
                $statement->execute([
                    $_POST['product-title'],
                    $_POST['product-price'],
                    $_POST['product-category'],
                    $_POST['product-description'],
                    $_POST['product-quantity'],
                    $_POST['product-img-main'],
                    $_POST['product-img-other'],
                    $_GET['id']
                ]);
                header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
                break;
            case "create":
                $statement = $conn->prepare("INSERT INTO
                    `products`
                    (
                        `title`,
                        `price`,
                        `category`,
                        `description`,
                        `quantity_avail`,
                        `image_main`,
                        `images_other`,
                        `date_create`,
                        `date_modify`
                    )
                    VALUES (?,?,?,?,?,?,?,NOW(),NOW())
                    ");
                $statement->execute([
                    $_POST['product-title'],
                    $_POST['product-price'],
                    $_POST['product-category'],
                    $_POST['product-description'],
                    $_POST['product-quantity'],
                    $_POST['product-img-main'],
                    $_POST['product-img-other']
                ]);
                $id = $conn->lastInsertId();
                header("location:{$_SERVER['PHP_SELF']}?id=$id");
                break;
            case "delete":
                $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
                $statement->execute([$_GET['id']]);
                header("location:{$_SERVER['PHP_SELF']}");
                break;
        }
    } catch (PDOException $e) {
        die ($e->getMessage());
    }
}



//TEMPLATES

function productListItem($r,$o) {
return $r.<<<HTML
<div class="card hard">
<div class="display-flex">
<div class="flex-none image-thumb"><img src="img/$o->image_main" alt="$o->title"></div>
<div class="flex-stretch" style="padding:1em;">$o->title</div>
<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
</div>
</div>
HTML;
}

function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",",$o->images_other),function($r,$o){return $r."<img src='img/$o'>";});

$display = <<<HTML
<div>
    <h2>$o->title</h2>
    <div class="form-control">
        <label class="form-label">Price</label>
        <span>&dollar;$o->price</span>
    </div>
    <div class="form-control">
        <label class="form-label">Category</label>
        <span>$o->category</span>
    </div>
    <div class="form-control">
        <label class="form-label">Description</label>
        <span>$o->description</span>
    </div>
    <div class="form-control">
        <label class="form-label">Quantity</label>
        <span>$o->quantity_avail</span>
    </div>
    <div class="form-control">
        <label class="form-label">Main Image</label>
        <span class="image-thumb"><img src="img/$o->image_main"></span>
    </div>
    <div class="form-control">
        <label class="form-label">Other Images</label>
        <span class="image-thumb">$images</span>
    </div>
</div>
HTML;

$form = <<<HTML
<div class="grid gap">
    <div class="col-xs-12 col-md-3"></div>
    <div class="col-xs-12 col-md-6">
        <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <h2>$addoredit Product</h2>
            <div class="form-control">
                <label for="product-title" class="form-label">Title: </label>
                <input type="text" class="form-input" size="30" id="product-title" name="product-title" value='$o->title' placeholder='Product Title'>
            </div>
            <div class="form-control">
                <label for="product-price" class="form-label">Price: </label>
                <input class="form-input" id="product-price" name="product-price" type="number" min="0" max="1000" step="0.01" value='$o->price' placeholder='Price'>
            </div>
            <div class="form-control">
                <label for="product-category" class="form-label">Category: </label>
                <input type="text" class="form-input" size="30" id="product-category" name="product-category" value='$o->category' placeholder='Category'>
            </div>
            <div class="form-control">
                <label for="product-description" class="form-label">Description: </label>
                <textarea class="form-input" size="30" id="product-description" name="product-description" placeholder='Description'> $o->description</textarea>
            </div>
            <div class="form-control">
                <label for="product-quantity" class="form-label">Quantity: </label>
                <input class="form-input" id="product-quantity" name="product-quantity" type="number" min="0" max="1000" step="0" value='$o->quantity_avail' placeholder='Quantity Available'>
            </div>
            <div class="form-control">
                <label for="product-img-main" class="form-label">Main Image: </label>
                <input type="textarea" class="form-input" size="30" id="product-img-main" name="product-img-main" value='$o->image_main' placeholder='Main Image filename'>
            </div>
            <div class="form-control">
                <label for="product-img-other" class="form-label">Images: </label>
                <input type="text" class="form-input image-thumb" size="30" id="product-img-other" name="product-img-other" value='$o->images_other' placeholder='image filenames separated by commas'>
            </div>
            <br>
            <input type="submit" class="form-button" value=
            "Save Changes">
        </form>
    </div>
    <div class="col-xs-12 col-md-3"></div>
</div>
HTML;

$output = $id == "new" ? $form :
    "<div class='grid'>
        <div class='col-xs-12 col-md-1'></div>
        <div class='col-xs-12 col-md-4'>$display</div>
        <div class='col-xs-12 col-md-7'>$form</div>
    </div>
    ";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete' class='form-button-light'>Delete</a>";

echo <<<HTML
<div>
    <nav class="nav display-flex">
        <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}" class="form-button-light">Back</a></div>
        <div class="flex-stretch"></div>
        <div class="flex-none">$delete</div>
    </nav>
    $output
</div>

HTML;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../parts/meta.php" ?>

    <title>Product Admin Page</title>
</head>
<body>
    <header class="navbar">
        <div class="container display-flex flex-align-center">
            <div class="flex-none">
            <img src="img/logoColorNav.png" alt="AbbyDazzled Logo" class="logo">
            </div>
            <div class="flex-none"><h2>Product Admin</h2></div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="view-window-small" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="grid">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <div class="card section rainbow">
                        <h2>Product Administration</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <?php
                if(isset($_GET['id'])) {
                    showProductPage(
                        $_GET['id']=="new" ?
                        $empty_product :
                    $product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
                    );
            
                } else {
                ?>
                <h2>Product List</h2>
                    <?php
                    $result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create` DESC");
                    echo array_reduce($result,'productListItem');
                    }
                ?>
    </div>
</body>
</html>