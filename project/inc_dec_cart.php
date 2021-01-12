
<?php
session_start();
include "config.php";
$uId = $_SESSION['customerId'];
$npid =$_COOKIE['id'];
echo $npid." ".$uId;

$sql_statement = "SELECT P.pid, P.Name, P.Price, C.NumberOfProducts
                  FROM product P, customers CU, cart C
                  WHERE CU.userId=$uId AND CU.userId = C.userId AND C.pid = P.pid";

$result = mysqli_query($db, $sql_statement);
$i = 1;
while($row = mysqli_fetch_assoc($result))
{
    if($i == $npid){
      $pid = $row['pid'];
      echo "im in loop".$pid;
      break;

    }
    $i=$i+1;
}

echo "Hello".$pid;

if(isset($_POST['incqty'])){
  $sql_statement = "UPDATE cart
                    SET totalPriceOfProduct = totalPriceOfProduct+(totalPriceOfProduct/NumberOfProducts),
                         NumberOfProducts = NumberOfProducts+1
                    WHERE userId =$uId AND pid = $pid";

 $result = mysqli_query($db, $sql_statement);
 header("Location: cart.php");
}

if(isset($_POST['decqty'])){
  $sql_statement = "UPDATE cart
                    SET totalPriceOfProduct = totalPriceOfProduct-(totalPriceOfProduct/NumberOfProducts), NumberOfProducts = NumberOfProducts-1
                    WHERE userId =$uId AND pid = $pid";

 $result = mysqli_query($db, $sql_statement);
 while($row = mysqli_fetch_assoc($result))
 {
   if($row['NumberOfProducts'] == 0)
    $sql_statement = "DELETE
                     FROM cart
                     WHERE userId=$uId AND pid = $pid";

    $result = mysqli_query($db, $sql_statement);

 }
 header("Location: cart.php");
}
?>
