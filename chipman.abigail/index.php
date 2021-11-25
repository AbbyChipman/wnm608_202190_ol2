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
            <h2>Check out some of our Featured Products!</h2>
        

        <?php

            $result = makeQuery(
                makeConn(), 
                "
                SELECT * 
                FROM `products`
                ORDER by `title` DESC
                LIMIT 3
                "
            );

            echo "<div class='grid gap'>",array_reduce($result,'featuredListTemplate'),"</div>";

            ?>
        </div>
    </div>
</body>
</html>