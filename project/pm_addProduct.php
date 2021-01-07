<?php

include "config.php";

$Name = $_POST['Name'];
$Price = $_POST['Price'];
$Quantity = $_POST['Quantity'];
$Size = $_POST['Size'];
$cid = $_POST['cid'];
$Picture = $_FILES['Picture'];

if (getimagesize($_FILES['imagefile']['tmp_name']) == false) {

    echo "<br />Please Select An Image.";
    
    } else {
    
    
    
    //declare variables
    
    $image = $_FILES['imagefile']['tmp_name'];
    
    $name = $_FILES['imagefile']['name'];
    
    $image = base64_encode(file_get_contents(addslashes($image)));
    }


if(isset($_POST['Name'], $_POST['Price'], $_POST['Quantity'], $_POST['Size'], $_POST['cid'], $_FILES['Picture']))
{
    $sql_statement = "INSERT INTO product(pmid ,cid, Name, Price, Quantity, Size, cid, Picture) VALUES('123462', $cid, $Name, $Price, $Quantity, $Size, $cid, $Picture)";
}

else 
{
    echo "The form is not set.";
}


?>