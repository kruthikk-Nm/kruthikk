<?php
	$title = "Admin";
	
?>
<html>
<head>
	<style>
body{
    background:lightgreen;
    background-image: url(splash.png);
    background-repeat: no-repeat;
   background-position: center;
   background-size:cover;
   position: relative;
   overflow:hidden;
}

h1{
    text-align:center;
    font-size:40px;
    padding-top:20px;
    color:red;
}
h1::after{
    content:'';
    background:darkblue;
    display:block;
    height:3px;
    width:450px;
    margin:20px auto 50px;
}
h3{
    text-align:center;
    font-size:30px;
    padding-top:20px;
    color:purple;
}
 h3::after{
    content:'';
    background:blue;
    display:block;
    height:3px;
    width:450px;
    margin:20px auto 50px;
}

.form-group{
    text-align:center;
    padding:8px;
    color:red;
    font-size: 20px;
    font-weight: bold;
}
.form-control{
    text-align:center;
    padding:10px;
    border:1px solid black;
}



</style>
		

</head>

<body>
<h1>INSURANCE MANAGEMENT</h1>
<h3>Login To Admin's Table</h3>
	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label for="name"  class="control-label col-md-4">USERNAME</label>
			<div class="col-md-4">
				<input type="text" row="2" placeholder="Username" name="name" class="form-control">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label for="pass"  class="control-label col-md-4">PASSWORD</label>
			<div class="col-md-4">
				<input type="password"  placeholder="Password" name="pass" class="form-control">
			</div>
		</div>
		<br>
<center>
		<input type="submit" name="submit" class="btn btn-primary">
</center>
	
</body>
</html>
<?php

?>