<?php include_once "lib/php/function.php";?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

    <?php include "parts/meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <div class="card soft">
            <h2>About Look and Fit</h2>

<!-- carousel -->
        <div class="carousel">
            <div class="slides">
                <div class="slide center" style="background:url(../song.summer/img/about_1.png) center; background-size: cover"></div>
                <div class="slide slide_center" style="background:url(../song.summer/img/about.png) center; background-size: cover"></div>
                <div class="slide" style="background: url(../song.summer/img/about_2.png) center; background-size: cover"></div>

            </div>
            <div class="controls">
                <div class="control-left">&lt;</div>
                <div class="control-right">&gt;</div>
                <div class="control-pagination">  
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                    <div class="control-dot">&bullet;</div>
                </div>
            </div>
        </div>

        <script>
        new Carousel({
        element: $(".carousel").eq(0),
        timing: 6000
        })
        </script>

        <h3>
        Look and Fit believes that
        Yoga and Pilates requires fitnesswears
        that can flatter the female body shape
        without discomfort. 
        </h3>

        <p>
        Our design evidently represents the meaning of Look and Fit that brings out the sexy and confident of women herself. 
        Fit also can be interpreted as to mix and match fitness wear and others to pull off an athleisure look.

        Since Look and Fit studied the outfits with the Yoga teachers and Pilates instructors from the beginning, 
        our philosophy is to make something that could satisfy those teachers and instructors. In order to achieve that goal, Look and Fit always considers researching and studying new materials, design, and pattern most importantly.

        Functional yet trendy, we always tries to step ahead to produce essential and unique sportswear.
        </p>
     
        </div>
    </div>
    <ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
    <footer> <p class="footer">Look and Fit @2021</p> </footer>
</body>
</html>