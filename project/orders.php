<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php echo "Orders"; ?></title>

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
            
            .orders-row {
                display: flex;
                justify-content: space-around;
            }

            .ord-box {
                padding: 0.5em;
                background: #f7f7f7;
                border-radius: 10px;
                margin: 2em 0.5em;
            }

            .ord-box > .ord-bg {
                height: 400px;
            }

            .ord-box > h3 {
                text-align: center;
                text-transform: uppercase;
                margin: 1em auto;
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
                        <ul class="breadcrumb-tree">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Orders</a></li>
                            
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

                        include "config.php";


                            $sql = "SELECT O.userId,O.orderID, O.Orderdate, O.SMid, O.ShippedDate, O.TotalPrice, O.OrderStatus, O.billingDate,
                            D.pid, D.Price, D.Quantity, P.Name, P.Picture
                            FROM customers C, orders O, orderdetails D, product P WHERE C.userId = O.userId AND P.pid = D.pid AND D.orderID = O.orderID AND O.userId = '1010'";
                            $result = mysqli_query($db, $sql);
                            
                            while($row = mysqli_fetch_assoc($result)) {

                                        ?>

                                        <!-- product -->
                                        
                                        
                       
                                        <div align= "center">
                                                <div class="product-body">
                                                
                                                   
                                                        <table style="width:100%", border=" 1px solid black">
                                                            <tr>
                                                                <th>OrderID</th>
                                                                <th>Order Date</th>
                                                                <th>Sales Manager</th>
                                                                <th>Shipping Date</th>
                                                                <th>Total Price</th>
                                                                <th>Status</th>
                                                                <th>Billing Date</th>
                                                                <th>Product</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
                                                               

                                                            </tr>
                                                            <tr>
                                                                <td> <?php echo $row["orderID"];?> </td>
                                                                <td> <?php echo $row["Orderdate"];?> </td>
                                                                <td> <?php echo $row["SMid"];?> </td>
                                                                <td> <?php echo $row["ShippedDate"];?> </td>
                                                                <td> <?php echo $row["TotalPrice"];?> </td>
                                                                <td> <?php echo $row["OrderStatus"];?> </td>
                                                                <td> <?php echo $row["billingDate"];?> </td>
                                                                <td> <?php echo $row["Name"];?> </td>
                                                                <td> <?php echo $row["Price"];?> </td>
                                                                <td> <?php echo $row["Quantity"];?> </td>

                                                            </tr>
                                                            
                                                            </table>
                                                            
                                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Picture'] ).'">'. "<br>". "<br>"."<br>" . "<br>". "<br>"; ?>

                                                   
                                                    
                                                </div>
                                        </div>
                                        <!-- /product -->

                                        <?php
                                    }
                                

                            ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /store products -->

                    
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

   


