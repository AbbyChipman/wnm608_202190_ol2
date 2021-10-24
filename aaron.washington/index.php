<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>
    <!-- *** NAVBAR *** -->
    <?php include "parts/navbar.php"; ?>

    <!-- *** HERO *** -->
    <div class="hero hero-landing display-flex flex-align-center">
        <div class="container flex-stretch">
            <div class="hero-text">
                <h2>TITLE GOES HERE</h2>
                <h4>Subtitle Here</h4>
                <button class="light">CTA Button</button>
            </div>
            <div class="flex-stretch"></div>
        </div>
    </div>

    <!-- *** CATEGORIES *** -->
    <div class="display-flex flex-align-center">
        <div class="grid gap">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 display-flex flex-align-center">
                <div class="flex-stretch text-center">
                    <h2>Shop by Category</h2>
                    <p>A clever copy blurb that says something more enticing than &lpar;here are categories to choose from.&rpar;</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="grid gap">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <div class="display-flex flex-align-center card-img card-bg-1">
                            <h3 class="flex-stretch">Mens</h3>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <div class="display-flex flex-align-center card-img card-bg-2">
                        <h3 class="flex-stretch">Womens</h3>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <div class="display-flex flex-align-center card-img card-bg-3">
                        <h3 class="flex-stretch">Teen</h3>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <div class="display-flex flex-align-center card-img card-bg-4">
                        <h3 class="flex-stretch">Kids</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>