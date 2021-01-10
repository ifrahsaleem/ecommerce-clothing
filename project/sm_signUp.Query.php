<?php

    include "config.php";


    if(isset($_POST['SMname'], $_POST['SMpass'], $_POST['SMmail'], $_POST['SMusername']))
    {
        $SMusername = $_POST['SMusername'];
        $SMpass = $_POST['SMpass'];
        $SMmail = $_POST['SMmail'];
        $SMname = $_POST['SMname'];
        
    
        $sql_statement = "INSERT INTO salesmanager(SMusername,SMpass, SMmail, SMname) VALUES ('$SMusername', '$SMpass', '$SMmail', '$SMname')";

        $result = mysqli_query($db, $sql_statement);

        if($result > 0)
            echo $SMname . " signed up successfully.";

        else
            echo "Could not sign up!";

       header("Location: sm_signUp.php");
    }

    else 
    {
        echo "The form is not set.";
    }

?>