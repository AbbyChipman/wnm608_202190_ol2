<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Look and Fit - Products</title>
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
     

	 <div class="container">
		<article class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Product List</h2>
				</div>
			</div>

			<div class="content cnt23">
			<!-- <h3>Tops</h3> -->
				<section>
					
					<article>
						<div class="image i12"></div>
						<div class="texts">
						
							<h4>Medium feather Overfit Short Sleeve </h4>
							<h5></h5>
							<p>
							This is loose-fit with side details for comfortable fitting.
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i13"></div>
						<div class="texts">
							<h4>Intention Bra Top_Orange</h4>
							<h5></h5>
							<p>
							High support with 3D pattern.
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i14"></div>
						<div class="texts">
							<h4>Allday Feather Crop Top_Lime Ade</h4>
							<h5></h5>
							<p>
							Light-weight cool texture crop top.
							</p>
							
						</div>
		
					</article>
					<article>
						<div class="image i15"></div>
						<div class="texts">
							<h4>Fresh Feather Twist Crop Short Sleeve</h4>
							<h5></h5>
							<p>
							Light-weight cool texture crop top.
							</p>
							
						</div>
					</article>
				</section>
				<section>
					<article>
						<div class="image i16"></div>
						<div class="texts">
						
							<h4>Cella Uptension Leggings</h4>
							<h5></h5>
							<p>
							Prevent from under booty folding issue.
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i17"></div>
						<div class="texts">
							<h4>Intention Hard Fluffy Napping Boots cut</h4>
							<h5></h5>
							<p>
							Powerful fleece-lined leggings with extra warmth.
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i18"></div>
						<div class="texts">
							<h4>Signature Lettering Pants_Black</h4>
							<h5></h5>
							<p>
							Soft touch and high body support and cover.
							</p>
							
						</div>
		
					</article>
					<article>
						<div class="image i19"></div>
						<div class="texts">
							<h4>Medium Feather Jogger Pants_Pampas Yellow</h4>
							<h5></h5>
							<p>
							Light & High gaze fabric with micro band in waist cutline.
							</p>
							
						</div>
					</article>
				</section>
				<section>
					<article>
						<div class="image i20"></div>
						<div class="texts">
						
							<h4>Corduroy Stopper Padding_Cream Beige</h4>
							<h5></h5>
							<p>
							The fabric is dried in tumble after give moisture to fabric.
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i21"></div>
						<div class="texts">
							<h4>Sherpa Highneck Stopper Jumper_Ash Cream</h4>
							<h5></h5>
							<p>
							Air layer helps to support quick dry and absorb.
							</p>
							
						</div>
					</article>
					<article>
						<div class="image i22"></div>
						<div class="texts">
							<h4>High Neck String Windbreaker_Safari Khaki /h4>
							<h5></h5>
							<p>
							This fabric has durability against frictions.
							</p>
							
						</div>
		
					</article>
					<article>
						<div class="image i23"></div>
						<div class="texts">
							<h4>Soft Fleece Highneck Zip up_Banana Yellow </h4>
							<h5></h5>
							<p>
							This fleece flurry fabric helps to keep temperature in warmth.
							</p>
							
						</div>
					</article>
				</section>
		</article>



	<ul class="table_of"><a href="#back_to_the_top">BACK TO THE TOP</a></ul>
</body>

</html>