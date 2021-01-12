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
        <div class="header-logo col-md-9" align="center">
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
						<!-- ACCOUNT -->
						<div class="col-md-2 clearfix">
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootdey">
    <div class="row bootstrap snippets">

        <div class="clearfix visible-sm"></div>
        <!-- SECTION -->
    		<div class="section">
    			<!-- container -->
    			<div class="container">
    				<!-- row -->
    				<div class="row">

    				<table class="table table-success table-striped">
    					<tr><th>Product </th><th> Unit Price</th> <th>Quantity</th>  <th>Sub Total</th></tr>
    				<?php

    			   include "config.php";
    			   session_start();
    			   error_reporting(0);
    			   $getuser=$_SESSION['userId'];
    			   if ($getuser== true)
    			   {

    			   }
    			   else
    			   {
    				       header("Location: homepage.php");
    			   }


            	$sql_statement = "SELECT P.Name, P.Price, C.NumberOfProducts
                                FROM product P, customers CU, cart C
                                WHERE CU.userId=1006 AND CU.userId = C.userId AND C.pid = P.pid";

            	$result = mysqli_query($db, $sql_statement);
              $total = 0;
            	while($row = mysqli_fetch_assoc($result))
            	{
            		$productName = $row['Name'];
            		$productPrice = $row['Price'];
            		$numberOfProducts = $row['NumberOfProducts'];
            		$SubTotal = $productPrice * $numberOfProducts;
                $total=   $total+  $SubTotal;
                    echo "<tr>". "<th>". $productName . "</th>". "<th>". $productPrice . "</th>"."<th>".$numberOfProducts. "</th>"."<th>".$SubTotal. "</th>"."</tr>";

            	}
              echo "<tr>". "<th>". "-" . "</th>". "<th>". "-" . "</th>"."<th>"."Total". "</th>"."<th>".$total. "</th>"."</tr>";

              ?>


              </table>

            				</div>
            				<!-- /row -->
            			</div>
            			<!-- /container -->
            		</div>
            		<!-- /SECTION -->

    </div>
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
    <script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>


	</body>
</html>
