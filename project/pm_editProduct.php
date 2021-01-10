<?php
session_start();
include "config.php";

if(isset($_POST['pid']))
{

    $Picture = addslashes(file_get_contents($_FILES["Picture"]["tmp_name"]));
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];
    $Size = $_POST['Size'];
    $cid = explode(' ', $_POST['cid'])[1];
    $PMid = $_SESSION['userId'];

    $sql_statement = "UPDATE product SET cid = '$cid', PMid = '$PMid', Name = '$Name', Price = '$Price', Quantity = '$Quantity', Size = '$Size', Picture = '$Picture' WHERE pid='" . $_POST['pid'] . "'";
    
    $result = mysqli_query($db, $sql_statement);
 
    if($result > 0)
    {
        echo 'Product successfully updated.';
        header("Location: displayProduct.php");
    }

    else
    echo 'Product not updated.' . $result;
}

else
{
    echo "The form is not set.";
}


?>