<?php
	$Age = $_GET['Age'];
    $vehicleinsuranceid = $_GET['vehicleinsuranceid'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE  FROM insurancetable1 WHERE Age = '$Age'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}

	

 $query = "DELETE  FROM insurancevehicle WHERE vehicleinsuranceid = '$vehicleinsuranceid'";
	$result1 = mysqli_query($conn, $query);
	if(!$result1){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	
	
	header("Location: admin_book.php");
?>