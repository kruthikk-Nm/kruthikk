<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Add new donars";
	//require "./template/header.php";
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$Name = trim($_POST['Name']);
		$Name = mysqli_real_escape_string($conn, $Name);
		
		$Age = trim($_POST['Age']);
		$Age = mysqli_real_escape_string($conn, $Age);

		$hospitalName= trim($_POST['hospitalName']);
		$hospitalName = mysqli_real_escape_string($conn, $hospitalName);

		$address= trim($_POST['address']);
		$address = mysqli_real_escape_string($conn, $address);

		$DateofAdmission= trim($_POST['DateofAdmission']);
		$DateofAdmission = mysqli_real_escape_string($conn, $DateofAdmission);

		
		$DateofDischarge= trim($_POST['DateofDischarge']);
		$DateofDischarge = mysqli_real_escape_string($conn, $DateofDischarge);
		
		$PhoneNumber = trim($_POST['PhoneNumber']);
		$PhoneNumber = mysqli_real_escape_string($conn, $PhoneNumber);

		$PolicyNumber = trim($_POST['PolicyNumber']);
		$PolicyNumber = mysqli_real_escape_string($conn, $PolicyNumber);
		
		/*$Email_Id = floatval(trim($_POST['Email_Id']));
		$Email_Id = mysqli_real_escape_string($conn, $Email_Id);*/
		
		/*$city = trim($_POST['city']);
		$city = mysqli_real_escape_string($conn, $city);*/

		// add image
		//if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
			//$image = $_FILES['image']['name'];
			//$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			///$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
			//$uploadDirectory .= $image;
			//move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
		//}

		// find publisher and return pubid
		// if publisher is not in db, create new
		/*$finddonar = "SELECT * FROM donationform WHERE city = '$city'";
		$findResult = mysqli_query($conn, $finddonar);
		if(!$findResult){
			// insert into publisher table and return id
			$insertdonar = "INSERT INTO donationform(city) VALUES ('$city')";
			$insertResult = mysqli_query($conn, $insertdonar);
			if(!$insertResult){
				echo "Can't add new donar " . mysqli_error($conn);
				exit;
			}
			$city = mysql_insert_id($conn);
		} else {
			$row = mysqli_fetch_assoc($findResult);
			$city = $row['city'];
		}
*/

		$query = "INSERT INTO insurancetable1 VALUES ('" . $Name . "', '" . $Age . "', '" . $hospitalName . "','" . $address . "','" . $DateofAdmission . "','" . $DateofDischarge . "','" . $PhoneNumber . "','" . $PolicyNumber . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new donars " . mysqli_error($conn);
			exit;
		} else {
			header("Location: admin_book.php");
		}
	}
?>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Name</th>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="Age" required></td>
			</tr>
			<tr>
				<th>hospitalName</th>
				<td><input type="text" name="hospitalName" required></td>
			</tr>
			<tr>
				<th>address</th>
				<td><input type="text" name="address" required></td>
			</tr>
			<tr>
				<th>DateofAdmission</th>
				<td><input type="text" name="DateofAdmission" required></td>
			</tr>
			
			<tr>
				<th>DateofDischarge</th>
				<td><input type="text" name="DateofDischarge" required></td>
			</tr>
			
			<tr>
				<th>PhoneNumber</th>
				<td><input type="text" name="PhoneNumber" required></td>
			</tr>

			
			<tr>
				<th>PolicyNumber</th>
				<td><input type="text" name="PolicyNumber" required></td>
			</tr>
			<!--<tr>
				<th>Email</th>
				<td><input type="text" name="Email_Id" required></td>
			</tr>-->
			<!--<tr>
				<th>City</th>
				<td><input type="text" name="city" required></td>
			</tr>-->
		</table>
		<input type="submit" name="add" value="Add new donar" class="btn btn-primary">
		<!--<input type="reset" value="cancel" class="btn btn-default">-->
	</form>
	<br/>
