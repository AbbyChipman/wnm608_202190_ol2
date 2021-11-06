<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Look and Fit - Home </title>
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
					<li class="flex-stretch"><a href="admin.php">Admin</a></li>
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
     
		<div class="view-window" style="background-image:url('../song.summer/img/yoga.jpg')">
		</div>


	<div class="container">
		<article class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Trending Products</h2>
				</div>
			</div>

			<div class="content cnt23">
				<section>
					<article>
						<div class="image i1"></div>
						<div class="texts">
						
							<h4>TOPS</h4>
							<h5></h5>
							<p>
								Soft touch Layered Short Sleeve SET
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i2"></div>
						<div class="texts">
							<h4>BOTTOMS</h4>
							<h5></h5>
							<p>
								NEW Cella Uptension Leggings 
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i3"></div>
						<div class="texts">
							<h4>DRESSES</h4>
							<h5></h5>
							<p>
								XELLA™ Intention Slim Fit Zip-up Jacket_Milky Peach
							</p>
							
						</div>
		
					</article>
					<article>
						<div class="image i4"></div>
						<div class="texts">
							<h4>OTHERS</h4>
							<h5></h5>
							<p>
								X-Prizma™ Alpha Binding Crop Top_Ivory
							</p>
							
						</div>
					</article>
				</section>
				<ul class="table_of"><a href="active_wear.php">More Products</a></ul>
		</article>



		<article class="card soft">
			<h2>Special Offers</h2>
			<div class="sale_flyer"></div>
			</div>
		</article>
	</div>



	<div class="container">

		<article class="card soft">
			<h2>New Memeber Benefits</h2>
			<div class="member_gift"></div>
			</div>
		</article>
	</div>

	<ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>

</html>