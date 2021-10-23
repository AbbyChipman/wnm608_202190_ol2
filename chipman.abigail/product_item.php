<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>

    <title>AbbyDazzled Designs - Product # <?= $_GET['id'] ?></title>
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

            <div class="nav nav-crumbs">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product_list.php">Products</a></li>
                    <li><a href="#">Product #<?= $_GET["id"]?></a></li>
                </ul>
            </div>

            <?php include "parts/prod_info.php" ?>

            
        </div>
    </div>
</body>
</html>