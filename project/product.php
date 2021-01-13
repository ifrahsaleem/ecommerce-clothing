<?php

    session_start();

   
    // MySQL DB Connection
    $conn = new mysqli('localhost', 'root', '', 'onlinesstore');

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    

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
            .product-title {
                text-transform: uppercase;
                margin-bottom: 2em;
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
                        <li><a href="allproducts.php">Products</a></li>
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
                        <ul class="breadcrumb-tree">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Products</a></li>
                            
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
                    <!-- STORE -->
                    <div id="store" class="col">
                        

                        <!-- store products -->
                        <div class="row">

                            <?php
                                // Fetch products from database
                                $proID = $_GET['pid'];
                                $sql = "SELECT * FROM product WHERE pid=$proID";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($product = $result->fetch_assoc()) {

                                        ?>
                                        
                                        <!-- product -->
                                        <div align= "center">
                                        <div class="col-md-6 col-xs-6">

                                            <div class="product">
                                                <div class="product-img">
                                                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $product['Picture'] ).'">'; ?>
                                                    <div class="product-label">
                                                        <!--<span class="sale">-30%</span>
                                                        <span class="new">NEW</span>-->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                        <div align= "center">
                                                <div class="product-body">

                                                    <h3 class="product-name"><a href="#"><?php echo $product['Name']; ?></a> </h3>
                                                    <h4 class="product-price">₺<?php echo $product['Price']; ?></h4>
                                                    <h5>Size: <?php echo $product['Size']; ?></h5>
                                                    
                                                    
                                                   
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <?php
                
                if ($product['Quantity'] != 0)
                {

                    ?>
                  <div class="add-to-cart">
                 <button class="add-to-cart-btn"><a href="cartquantity.php?pid=<?php echo $proID;?>"><i class="fa fa-shopping-cart"></i> add to cart</button>
                 </div>

                 <?php
                }
                else
                {
                    ?>
                    <div class="add-to-cart">
                    <button class="add-to-cart-btn">Out Of Stock!</button>
                    </div>

                    <?php
                    }
                ?>
                                                
                                            

                                                
                                            </div>
                                        </div>
                                        
                                        <!-- /product -->
                                        
                                        <?php
                                        
                                    }
                                }
                                include "showingcomments.php";
                            ?>

                        <!-- /store products -->


                    <!-- /STORE -->

                <!-- /row -->

            <!-- /container -->

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
                                <h3 class="footer-title">Product</h3>
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
