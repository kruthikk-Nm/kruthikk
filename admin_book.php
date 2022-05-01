<?php
	session_start();

	require_once "./functions/admin.php";
	$title = "CLAIM LIST";
	//require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
	$result1 = getrAll($conn);
?>
<body style="background-color:lightblue">
<center><h1 style="color:darkblue"><u>Welcome To Admin's Panel</u></h1></center>

<button style="border-color:darkgreen">
	<p class="lead"><a style="color:darkgreen" href="admin_add.php">Add new claim</a></p>
	</button>
	<button style="border-color:darkgreen">
	<p ><a style="color:darkgreen" href="admin_signout.php" class="btn btn-primary">LOG  OUT !</a></p>
	</button>

	<h2 style="color:darkblue"><u> CLAIM INFO </u></h2>
	<table class="table" style="margin-top: 20px">
	
		<tr>
			<th>Name</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>Age</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>hospitalName</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>address</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>DateofAdmission</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>DateofDischarge</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>PhoneNumber</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>PolicyNumber</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['Name']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['Age']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['hospitalName']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['address']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['DateofAdmission']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['DateofDischarge']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['PhoneNumber']; ?></td><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['PolicyNumber']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
	
			<!--<td><button style="border-color:darkblue"><a href="admin_edit.php?Id=<?php echo $row['Age']; ?>">Edit</a></td></button><th>&nbsp;</th><th>&nbsp;</th>-->
			<td><button style="border-color:darkblue"><a style="color:darkblue" href="admin_delete.php?Age=<?php echo $row['Age']; ?>">Delete</a></button></td>
		</tr>
		<?php } ?>
	</table>

    <h2 style="color:darkblue"><u>VEHICLE INSURANCE CLAIM</u></h2>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>vehicleinsuranceid</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>vehiclenumber</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>rto</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>vehicleage</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>manufacturer</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>chasisnumber</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<th>enginenumber</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>

			<th>suminsured</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result1)){ ?>
		<tr>
			<td><?php echo $row['vehicleinsuranceid']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['vehiclenumber']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['rto']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['vehicleage']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['manufacturer']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['chasisnumber']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
			<td><?php echo $row['enginenumber']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
            <td><?php echo $row['suminsured']; ?></td><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>

			<!--<td><?php  rgetdonarName($conn, $row['suminsured']); ?></td>-->
			<!--<td><button style="border-color:darkblue"><a href="admin_edit.php?=<?php echo $row['vehicleinsuranceid']; ?>">Edit</a></button></td><th>&nbsp;</th><th>&nbsp;</th>-->
			<td><button style="border-color:darkblue"><a style="color:darkblue" href="admin_delete.php?vehicleinsuranceid=<?php echo $row['vehicleinsuranceid']; ?>">Delete</a></button></td>
		</tr>
		<?php } ?>
	</table>
		
		</div>
		</body>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>