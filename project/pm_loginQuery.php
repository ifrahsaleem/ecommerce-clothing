<?php

	session_start();

?>


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
                $_SESSION['username'] = $row['PMusername'];

                echo $PMusername . " logged in successfully.";
                header("Location: pm_homePage.php");
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