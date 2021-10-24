<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWesome Stuff</title>
    <link rel="stylesheet" href="lib/css/styleguide.css">
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
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 display-flex flex-align-center">
                <div class="flex-stretch text-center">
                    <h2>Apparel For Everyone</h2>
                    <h5>A clever copy blurb that says something more enticing than &quot;here are categories to choose from.&quot;</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="grid gap">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <a href="shop.php?id=mens">
                            <div class="display-flex flex-align-center card-img card-bg-1">
                                <h3 class="flex-stretch">Mens</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <a href="shop.php?id=womens">
                            <div class="display-flex flex-align-center card-img card-bg-2">
                                <h3 class="flex-stretch">Womens</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <a href="shop.php?id=teen">
                            <div class="display-flex flex-align-center card-img card-bg-4">
                                <h3 class="flex-stretch">Teen</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">
                        <a href="shop.php?id=womens">
                            <div class="display-flex flex-align-center card-img card-bg-3">
                                <h3 class="flex-stretch">Kids</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *** FOOTER *** -->
    <?php include "parts/footer.php"; ?>
    
</body>
</html>