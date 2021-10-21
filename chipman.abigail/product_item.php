<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>

    <title>Product List</title>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="view-window-small" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="grid">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <div class="card section rainbow">
                        <h2>Product # <?= $_GET['id'] ?></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <p>This is Product #<?= $_GET["id"]?></p>
            <p>This is where the information about the product will be, including images, description, reviews, and a way to add the item to the cart. Click the button to go to the cart page (page is a placeholder - no products are added at this time.)</p>
            <div class="grid gap">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <a href="cart.php" class="form-button">Add to Cart</a>
                </div>
            <div class="col-xs-12 col-md-4"></div>
        </div>
        </div>
    </div>
</body>
</html>