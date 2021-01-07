<?php

    include "config.php";


    if(isset($_POST['PMname'], $_POST['PMpass'], $_POST['PMemail'], $_POST['PMusername']))
    {

        $PMname = $_POST['PMname'];
        $PMpass = $_POST['PMpass'];
        $PMemail = $_POST['PMemail'];
        $PMusername = $_POST['PMusername'];

        $sql_statement = "INSERT INTO pmanager(PMname,PMpass, PMemail, PMusername) VALUES ('$PMname', '$PMpass', '$PMemail', '$PMusername')";

        $result = mysqli_query($db, $sql_statement);

        if($result > 0)
            echo $PMname . " signed up successfully.";

        else
            echo "Could not sign up!";

       // header("Location: pm_signUp.php");
    }

    else 
    {
        echo "The form is not set.";
    }

?>