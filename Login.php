<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(isset($_COOKIE['pharm_code'])) 
		header('location: Home2.php');
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home.php" style="text-decoration: none;">Home</a>
			<a href="Search.php" style="text-decoration: none;">Search Medicine</a>
		</div>
		
		<div class = "container">
		<form action="LoginComplete.php" method="POST">
			<div class = "row">
				<div class = "col-25">
					<label>Pharmacy Code</label>
				</div>
				<div class = "col-75">
					<input type = "text" name = "pharmCode" placeholder="Pharmacy code" required>
				</div>
			</div>
			
			<div class = "row">
				<div class = "col-25">
					<label>Admin Name</label>
				</div>
				<div class = "col-75">
					<input type = "text" name = "adminName" placeholder="Admin name" required>
				</div>
			</div>
			
			<div class = "row">
				<div class = "col-25">
					<label>Password</label>
				</div>
				<div class = "col-75">
					<input type = "password" name = "password" placeholder="Password" required>
				</div>
			</div>
			<input type="submit" value="Login">
			</form>
		</div>
		
	</body>
</html>