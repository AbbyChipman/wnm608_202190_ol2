<!DOCTYPE html>
<html lang="en">
<head>
<?php include "parts/meta.php" ?>
    
    <title id="name">Product List</title>
</head>
<body>
    <?php include "parts/navbar.php" ?>
    
    <div class="view-window-small display-flex flex-align-right flex-justify-center" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="card section rainbow">
            <h2>Products</h2>
        </div>
    </div>


    <div class="container">
        <div class="card soft">
            <ul>
                <li><a href="product_item.php?id=1">Product 1</a></li>
                <li><a href="product_item.php?id=2">Product 2</a></li>
                <li><a href="product_item.php?id=3">Product 3</a></li>
                <li><a href="product_item.php?id=4">Product 4</a></li>
            </ul>
        </div>
    </div>
</body>
</html>