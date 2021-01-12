<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>hulu</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css"/>
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/guljahan.css"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>
	<body>
    <!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
        <div class="header-logo" align="center">
          <a href="#" class="logo">
            <img src="./img/hulu.png" width=200 alt="">
          </a>
        </div>

      </div>
      <!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="top-header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<!-- SEARCH BAR -->
						<div class="col-md-9">
							<div class="header-search" padding-left="10px">
								<form action="search.php" method="POST">
									<select name="opt" class="input-select">
										<option value="0">Categories</option>
										<option value="1">Coats</option>
										<option value="2">Dresses</option>
                    <option value="3">Trousers</option>
                    <option value="4">Bags</option>
                    <option value="5">Shoes</option>
                    <option value="6">Accessories</option>
                    <option value="7">Shirts</option>
                    <option value="8">Sweat-shirts</option>
                    <option value="9">Suits</option>
                    <option value="10">Skirts/Shorts</option>
									</select>
									<input class="input" name="search" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->

						<div class="col-md-3 clearfix">
							<div class="header-ctn">
                  <div class="dropdown pull-right accounts">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Account
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="signup.php">User</a><br>
                          <a class="dropdown-item" href="pm_loginPage.php">Product Manager</a><br>
                          <a class="dropdown-item" href="sm_loginPage.php">Sales Manager</a><br>
                        </div>
                  </div>

								<!-- Cart -->
								<div class="yourcart pull-right">
									<a href="cart.php" class="btn" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>My Cart</span>
									</a>
								</div>
								<!-- /Cart -->
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
						<li class="active"><a href="homepage.php">Home</a></li>
						<li><a href="categories.php">Categories</a></li>
            <li><a href="orders.php">Orders</a></li>
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
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="homepage.php">Home</a></li>
							<li class="active">Checkout</li>
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
				<div class="row">

					<div class="col-md-8">
						<!-- shipping Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Shipping Information</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="surname" placeholder="Surname">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
              <div class="form-group">
								<input class="input" type="text" maxlength="16" name="creditCardNo" placeholder="Credit Card Number">
							</div>
              <div class="form-group">
                <input class="input" type="text" maxlength="16" name="creditCardName" placeholder="Credit Card Name">
              </div>
              <div class="form-group">
                <input class="input" type="text" maxlength="3" name="creditCardExpDate" placeholder="Credit Card Expiry Date">
              </div>
						</div>
						<!-- /Shipping Details -->
					</div>

					<!-- Order Details -->
					<div class="col-md-4 order-details">
						<div class="section-title text-center">
							<h3 class="title">Order Details</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCTS</strong></div>
								<div><strong>SUB TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>0 TL</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>0 TL</div>
								</div>
							</div>
							<div class="order-col">
								<div>SHIPPING</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">0 TL</strong></div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#trms and conditions.php">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
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
    						<div>
    							<div class="footer col-md-6" align="center">
    								<h3 class="footer-title">About Us</h3>
    								<p>Our team:<br>Khadeja Iqbal<br>Guljahan Annagurbanova<br>Ifrah Saleem<br>Haider Khan Jadoon<br>Saif Ul Malook</p>
                  </div>
                  <div class="footer col-md-6" align="center">
                  <h3 class="footer-title">Contact Us</h3>
                  <ul class="footer-links">
                    <li><a href="#"><i class="fa fa-map-marker"></i>CS 306 Project<br>Sabanci University</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+01 23 45 67 89<br>+98 76 54 32 10</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i>huluHulu@gmail.com</a></li>
                  </ul>
                 </div>
    						</div>

    						<div class="clearfix visible-xs"></div>
    					</div>
    					<!-- /row -->
    				</div>
    				<!-- /container -->
    			</div>
    			<!-- /top footer -->

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
