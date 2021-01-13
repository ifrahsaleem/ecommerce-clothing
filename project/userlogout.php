<?php
 session_start();
 unset($_SESSION["auth"]);
 unset($_SESSION["usernameCustomer"]);
 unset($_SESSION["customerId"]);
 session_unset();
 header("Location: index.php");
?>
