<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Categories</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
			.categories-row {
				display: flex;
				justify-content: space-around;
			}

			.cat-box {
				padding: 0.5em;
				background: #f7f7f7;
				border-radius: 10px;
				margin: 2em 0.5em;
			}

			.cat-box > .cat-bg {
				height: 400px;
			}

			.cat-box > h3 {
				text-align: center;
				text-transform: uppercase;
				margin: 1em auto;
			}

			#cat_coats {
				background: url('img/categories/coats.jpg') center center;
				background-size: cover;
			}

			#cat_dresses {
				background: url('img/categories/dresses.jpg') center center;
				background-size: cover;
			}

			#cat_trousers {
				background: url('img/categories/trousers.jpg') center center;
				background-size: cover;
			}

			#cat_bags {
				background: url('img/categories/bags.jpg') center center;
				background-size: cover;
			}

			#cat_shoes {
				background: url('img/categories/shoes.png') center center;
				background-size: cover;
			}

			#cat_accessories {
				background: url('img/categories/accessories.jpg') center center;
				background-size: cover;
			}

			#cat_shirts {
				background: url('img/categories/shirts.jpg') center center;
				background-size: cover;
			}

			#cat_sweatshirts {
				background: url('img/categories/sweatshirts.jpg') center center;
				background-size: cover;
			}

			#cat_suits {
				background: url('img/categories/suits.jpg') center center;
				background-size: cover;
			}

			#cat_skirts {
				background: url('img/categories/skirts.jpg') center center;
				background-size: cover;
			}

		</style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-right">
						<?php
							if (isset($_SESSION['username']))
								echo '<li><a href="#"><i class="fa fa-user-o"></i> Welcome, ' . $_SESSION["username"] . '!</a></li>';
							else
								echo '<li><a href="login.php"><i class="fa fa-user-o"></i> Login</a></li>';
						?>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/hulu.png" alt="" width="300px" height="100px">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="categories.php">Categories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Categories</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Categories</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row categories-row">
					<div class="col-md-4 cat-box">
						<div id="cat_coats" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=1">Coats</a></h3>
					</div>
					<div class="col-md-4 cat-box">
						<div id="cat_dresses" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=2">Dresses</a></h3>
					</div>
					<div class="col-md-4 cat-box">
						<div id="cat_trousers" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=3">Trousers</a></h3>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row categories-row">
					<div class="col-md-4 cat-box">
						<div id="cat_bags" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=4">Bags</a></h3>
					</div>
					<div class="col-md-4 cat-box">
						<div id="cat_shoes" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=5">Shoes</a></h3>
					</div>
					<div class="col-md-4 cat-box">
						<div id="cat_accessories" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=6">Accessories</a></h3>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row categories-row">
					<div class="col-md-4 cat-box">
						<div id="cat_shirts" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=7">Shirts</a></h3>
					</div>
					<div class="col-md-4 cat-box">
						<div id="cat_sweatshirts" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=8">Sweatshirts</a></h3>
					</div>
					<div class="col-md-4 cat-box">
						<div id="cat_suits" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=9">Suits</a></h3>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row categories-row">
					<div class="col-md-4 cat-box">
						<div id="cat_skirts" class="cat-bg"></div>
						<h3><a href="category.php?cat_id=10">Skirts/Shorts</a></h3>
					</div>
				</div>
				<!-- /row -->
			<!-- /container -->
		</div>
		</div>
		<!-- /SECTION -->

	

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
