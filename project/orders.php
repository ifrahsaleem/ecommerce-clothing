<?php
session_start();
include "config.php";


    $sql = "SELECT O.orderID, O.Orderdate, O.SMid, O.ShippedDate, O.TotalPrice, O.OrderStatus, O.billingDate,
    D.pid, D.Price, D.Quantity
     FROM customers C, orders O, orderdetails D WHERE C.userId = O.userId  AND D.orderID = O.orderID AND O.userId = '1010'";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "OrderID: " . $row["orderID"]. " Order Date: " . $row["Orderdate"]. " Sales Manager: ". $row["SMid"]. " Shipping Date:".
        $row["ShippedDate"]. " Total Price: TL".$row["TotalPrice"]. " Status: ".$row["OrderStatus"]. " Billing Date: ".$row["billingDate"]. " "."<br>";

      
    }
    
   
?>

