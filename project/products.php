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

        <title>Products</title>

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
            .products-row {
                display: flex;
                justify-content: space-around;
            }

            .pro-box {
                padding: 0.5em;
                background: #f7f7f7;
                border-radius: 10px;
                margin: 2em 0.5em;
            }

            .pro-box > .pro-bg {
                height: 400px;
            }

            .pro-box > h3 {
                text-align: center;
                text-transform: uppercase;
                margin: 1em auto;
            }

            #pro_coat {
                background: url('img/products/woolcoat.png') center center;
                background-size: cover;
            }

            #pro_cottonshirt {
                background: url('img/products/cotton shirt.png') center center;
                background-size: cover;
            }

            #pro_flowy {
                background: url('img/products/flowyplazzo.png') center center;
                background-size: cover;
            }

            #pro_janjean {
                background: url('img/products/grey jan.png') center center;
                background-size: cover;
            }

            #pro_earring {
                background: url('img/products/hoop earing.png') center center;
                background-size: cover;
            }

            #pro_boots {
                background: url('img/products/lace boots.png') center center;
                background-size: cover;
            }

            #pro_bag {
                background: url('img/products/leather bag.png') center center;
                background-size: cover;
            }

            #pro_sweatshirt {
                background: url('img/productss/sweatshirts.png') center center;
                background-size: cover;
            }

            #pro_momfit {
                background: url('img/products/momfit.png') center center;
                background-size: cover;
            }

            #pro_shorts {
                background: url('img/products/shorts.png') center center;
                background-size: cover;
            }

            #pro_dress {
                background: url('img/products/velvetdress.png') center center;
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
                        <li class="active"><a href="products.php">Products</a></li>
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
                        <h3 class="breadcrumb-header">Products</h3>
                        <ul class="breadcrumb-tree">
                            <li><a href="#">Home</a></li>
                            <li class="active">Products</li>
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
                <div class="row products-row">
                    <div class="col-md-4 pro-box">
                        <div id="pro_coat" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=1">Wool Blend Coat With Belt</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_cottonshirt" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=7">Lyocell Cotton Shirt</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_flowy" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=3">Flowy palazzo trousers</a></h3>
                    </div>
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row products-row">
                    <div class="col-md-4 pro-box">
                        <div id="pro_janjean" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=11">grey Jan jeans</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_earring" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=6">RhineStone Hoop Earings</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_boots" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=5">Lace up track sole boots</a></h3>
                    </div>
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row products-row">
                     <div class="col-md-4 pro-box">
                        <div id="pro_bag" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=4">Leather Bag</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_sweatshirt" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=8">Sweatshirt</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_momfit" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=10">Mom-fit jeans</a></h3>
                    </div>
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row products-row">
                     <div class="col-md-4 pro-box">
                        <div id="pro_shorts" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=9">Denim shorts</a></h3>
                    </div>
                    <div class="col-md-4 pro-box">
                        <div id="pro_dress" class="pro-bg"></div>
                        <h3><a href="product.php?pro_id=2">Velvet Dress</a></h3>
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
                                <h3 class="footer-title">Products</h3>
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
        
        <?php

        include "config.php";

        
        ?>
    </body>
</html>


