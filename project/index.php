<?php
	session_start();
	include "config.php";

	  $sql_statement = "SELECT o.userId FROM orders o
											WHERE o.userId = (SELECT MAX(userId) AS uIdm FROM customers)";
		$result = mysqli_query($db, $sql_statement);
		$row = mysqli_fetch_assoc($result);
		if(!is_null($row['userId'])){

			$sql_statement = "INSERT INTO customers(isGuest) VALUES(0)";
			$r = mysqli_query($db, $sql_statement);

			$sql_statement = "SELECT MAX(userId) AS uIdm FROM customers";
			$rr = mysqli_query($db, $sql_statement);

			$roww = mysqli_fetch_assoc($rr);
			$_SESSION["customerId"] = $roww['uIdm'];
		}else{
			$sql_statement = "SELECT MAX(userId) AS uIdm FROM customers";
			$rr = mysqli_query($db, $sql_statement);
			$row = mysqli_fetch_assoc($rr);

			$delCustomer = $row['uIdm'];
			$sql_statement = "DELETE FROM customers
												WHERE userId = $delCustomer";
			$result = mysqli_query($db, $sql_statement);

			$sql_statement = "INSERT INTO customers(isGuest) VALUES(0)";
			$r = mysqli_query($db, $sql_statement);

			$sql_statement = "SELECT MAX(userId) AS uIdm FROM customers";
			$rr = mysqli_query($db, $sql_statement);

			$roww = mysqli_fetch_assoc($rr);
			$_SESSION["customerId"] = $roww['uIdm'];

		}
 header("Location: homepage.php");
?>
