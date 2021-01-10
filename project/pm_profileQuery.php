<?php
	session_start();
    include "pm_authCheck.php"
    
    $sql_statement = "SELECT P.* FROM pmanager P WHERE P.PMid = '" . $_SESSION['userId'] . "' ";

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result))
    {

        

    }

?>