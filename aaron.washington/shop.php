<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>
    <!-- *** NAVBAR *** -->
    <?php include "parts/navbar.php"; ?>

    <!-- *** CATEGORY HERO *** -->
    <div class="container" style="margin-top: 5rem;">
        <div class="hero display-flex flex-align-center" style="min-height: 17vh;">
            <div class="flex-stretch">
                <div class="text-center" style="color: #fff;">
                    <h2>IT'S THAT TIME OF YEAR</h2>
                    <h4 style="color: var(--color-neutral-light);">Use Code FALLISHERE to get 30&percnt; off your entire purchase.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- *** CRUMB NAV *** -->
    <div class="container">
        <nav class="nav nav-crumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#"><?= $_GET['id'] ?></a></li>
            </ul>
        </nav>
    </div>

    <!-- *** PRODUCT LIST *** -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt1">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt2">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt3">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt4">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt5">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt6">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt7">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="product.php?id=Mens&prd=Tshirt8">
                    <figure class="figure product-overlay">
                        <img src="https://i.imgur.com/q2EKStt.png" alt="Placeholder image" />
                        <figcaption>
                            <div class="caption-body">
                                <div>Premium T-Shirt</div>
                                <div>$24.99</div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>


    <?php

    //Connect to mySQL database info

    $host = "custsqlmoo32";
    $user = "aaronjw_wnm608";   
    $pass = "1Truth1***";
    $database = "aaronjwash_aau";

    // Stands for mySQL Improve
    $conn = new mysqli($host,$user,$pass,$database);

    if($conn->connect_errno) die($conn->connect_error);

    // result variable comes from products table
    $result = $conn->query("SELECT * FROM `products` WHERE 1");

    // if there is an error, show it to me
    if($conn->errno) die ($conn->error);

    // row variable fetches object from result variable, then displays price column values
    while($row = $result->fetch_object()) {
        echo "<div>$row->price</div>";
    }

    ?>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>

</body>

</html>