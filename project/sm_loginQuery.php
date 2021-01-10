<?php

session_start();
    include "config.php";

    if(isset($_POST['SMpass'], $_POST['SMusername']))
    {
        $SMpass = $_POST['SMpass'];
        $SMusername = $_POST['SMusername'];

        $sql_statement = "SELECT * FROM salesmanager S WHERE S.SMpass = '$SMpass' AND S.SMusername = '$SMusername'";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {

            if($row['SMpass'] == $SMpass && $row['SMusername'] == $SMusername)
            {
                // set the session
                $_SESSION['authorized'] = true;
                //set User Id
                $_SESSION['userId'] = $row['SMid']; 
                $SMname= $row['SMname'];

                //echo $SMname . " logged in successfully.";
                header("Location: smwelcome.php");
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