<?php

    include "config.php";

    if(isset($_POST['PMpass'], $_POST['PMusername']))
    {
        $PMpass = $_POST['PMpass'];
        $PMusername = $_POST['PMusername'];

        $sql_statement = "SELECT * FROM pmanager P WHERE P.PMpass = '$PMpass' AND P.PMusername = '$PMusername'";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {

            if($row['PMpass'] == $PMpass && $row['PMusername'] == $PMusername)
            {
                // set the session
                $_SESSION['authorized'] = true;
                //set User Id
                $_SESSION['userId'] = $row['PMid']; 

                echo $PMname . " logged in successfully.";
                header("Location: displayProduct.php");
            }

            else
                echo "Could not login!";
        }
    }
    else 
    {
        echo "The form is not set.";
    }
?>