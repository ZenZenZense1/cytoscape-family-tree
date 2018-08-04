<?php 
	include("database_connection.php");
	$registrynum = $_GET["registrynum"];
	$result = mysqli_query($con,"SELECT * FROM child WHERE registrynum=$registrynum");

	$details = mysqli_fetch_object($result);
	echo json_encode($details);
?>