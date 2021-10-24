<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Look and Fit - About </title>
    <link rel="stylesheet" href="css/gridsystem.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- JQUERY-->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card soft">
            <h1 class="main_title" id="back_to_the_top"> <a href="index.php">Look and Fit</a> </h1>
            <nav id="main_nav">
                <ul class="main_nav2">
                    <li class="flex-stretch"><a href="index.php">Home</a></li>
                    <li class="flex-stretch"><a href="active_wear.php">Active Wear</a></li>
                    <li class="flex-stretch"><a href="about.php">About</a></li>
                    <li class="flex-stretch"><a href="cart.php">Cart</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <script>
        $("#navigations a").on("click", function (e) {
            e.preventDefault();
            $(this).closest("li").addClass("active")
                .siblings().removeClass("active")
        })
    </script>



    <div class="container">

        <article class="card soft">
            <h2>About</h2>
            <p>Page for the about section</p>
			<div class="about"></div>
    </div>
    </article>
    </div>

    <ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>

</html>