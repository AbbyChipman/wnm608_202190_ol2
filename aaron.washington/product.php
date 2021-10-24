<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <!-- *** CRUMB NAV *** -->
    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#"><?= $_GET['id'] ?></a></li>
            <li><a href="#"><?= $_GET['prd'] ?></a></li>
        </ul>
    </nav>

    <!-- *** PRODUCT CONTENT *** -->
   <div class="container">
        <div class="grid gap">
            <div class="col-xs-6" style="text-align: center;">
                <img src="img/AW-Product-Tshirt_Premium_Mens.jpg"
                     alt="Premium Tshirt &ndash; Mens"
                     title="Premium Tshirt &ndash; Mens" />
            </div>
            <div class="col-xs-6 product-text">
                <h3>Premium T-shirt &ndash; Mens</h3>
                <h4><b>&dollar;24.99</b></h4>
                <p>
                    Product Description copy goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Mauris non interdum erat. Quisque ut euismod lorem. Aliquam ac condimentum dui. 
                    Nullam purus elit, semper id suscipit non, tincidunt eget justo.
                </p>
                <br />
                <h5>Size</h5>
                <div class="form-select form-control" style="width: 6rem;">
                    <select>
                        <option>XS</option>
                        <option>SM</option>
                        <option>MD</option>
                        <option>LG</option>
                        <option>XL</option>
                        <option>2X</option>
                    </select>
                </div>
                <br />
                <h5>Quantity</h5>
                <div class="form-select form-control" style="width: 6rem;">
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <br />
                <a href="cart.php"><button class="dark">Add to Cart</button></a>
            </div>
        </div>
   </div>
    
</body>
</html>