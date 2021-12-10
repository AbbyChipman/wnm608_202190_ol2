<?php include "parts/meta.php";
      include_once "lib/php/functions.php";
      include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>AbbyDazzled Designs</title>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="view-window" style="background-image:url(img/hero.jpg);">
        <div class="container display-flex">
            <div class="flex-stretch"></div>
            <div class="flex-none">
                <h1 class="card section rainbow">New notebook sets are here!</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <h2 style="text-align: center">Check out some of our Newest Products!</h2>

            <h2 style="text-align: center">New Stationery Sets!</h2>
            <?php featuredCategory("sets");?>

        </div>
    </div>
</body>
</html>