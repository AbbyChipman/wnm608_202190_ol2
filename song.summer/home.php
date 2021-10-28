<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <link rel="stylesheet" href="css/gridsystem.css">
</head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<body>
<div class="container">
        <div class="card soft">
            <h1 class="main_title" id="back_to_the_top"> <a href="home.php">Look and Fit</a> </h1>
            <nav id="main_nav">
                <ul class="main_nav2">
                    <li class="flex-stretch"><a href="home.php">Home</a></li>
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

	<div class="view-window" style="background-image:url('/img/yoga.jpg')"> 
	</div>

    <div class="container">

<article class="card soft">
    <h2>We Are on Sale!</h2>
    <p></p>
    <div class="sale_flyer"></div>
</div>
</article>
</div>

<article class="card soft">
    <h2>Member Benefits!</h2>
    <p>Page for the about section</p>
    <div class="member_gift"></div>
</div>
</article>
</div>

<ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>

</body>

</html>