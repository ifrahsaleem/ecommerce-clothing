
<?php
include "config.php";

$user = $_SESSION['customerId'];
                    $pid = $_GET['pid'];

                    $sql = "SELECT Price FROM product WHERE pid = $pid";

                    $result = mysqli_query($db, $sql);

                    while($row = mysqli_fetch_assoc($result)){

                        $price = $row['Price'];
                        
                        
                        
                        }
                        

                  $sql_statement = "INSERT INTO cart(userId, pid, NumberOfProducts, totalPriceOfProduct
                                    VALUE ('$user', '$pid', '1', '$price')";
                $result2 = mysqli_query($db, $sql_statement);


                header("Location: allproducts.php");

?>