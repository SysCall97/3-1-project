<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(isset($_COOKIE['pharm_code'])) 
		header('location: Home2.php');
?>
<html>
	<head>
		<title>Pharmacy Registration</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home.php" style="text-decoration: none;">Home</a>
			<a href="Search.php" style="text-decoration: none;">Search Medicine</a>
		</div>
		
		<div class = "container">
			<form action="RegComplete.php" method="post">
			
				<div class = "row">
					<div class = "col-25">
						<label>Pharmacy Name</label>
					</div>
					<div class = "col-75">
					<input type = "text" name = "pharmName" placeholder="Pharmacy name" required>
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
				
				<div class="row">
					<div class="col-25">
						<label>Area</label>
					</div>
					<div class="col-75">
						<select name = "areaName" required>
						<option></option>
						<option>Mirpur, Dhaka</option>
						<option>Uttara, Dhaka</option>
						<option>Mohammadpur, Dhaka</option>
						<option>Gulistan, Dhaka</option>
						<option>Banani, Dhaka</option>
						<option>Dhanmondi, Dhaka</option>
						<option>Bashabo, Dhaka</option>
						<option>Khilkhet, Dhaka</option>
						</select>
					</div>
				</div>
				
				<div class = "row">
					<div class = "col-25">
						<label>Address</label>
					</div>
					<div class = "col-75">
					<textarea name="address" placeholder="Address..." style="height:100px"></textarea>
					</div>
				</div>
				
				<div class = "row">
					<div class = "col-25">
						<label>Mobie No</label>
					</div>
					<div class = "col-75">
					<input type = "text" name = "mobileNo" placeholder="Mobile No" required>
					</div>
				</div>
				
				<div class = "row">
					<div class = "col-25">
						<label>Opening Time</label>
					</div>
					<div class = "col-75">
					<input type = "text" name = "openingTime" placeholder="HH:MM:SS" required>
					</div>
				</div>
				
				<div class = "row">
					<div class = "col-25">
						<label>Closing Time</label>
					</div>
					<div class = "col-75">
					<input type = "text" name = "closingTime" placeholder="HH:MM:SS" required>
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
				
				<div class = "row">
					<div class = "col-25">
						<label>Confirm Password</label>
					</div>
					<div class = "col-75">
					<input type = "password" name = "confirmPassword" placeholder="Confirrm Password" required>
					</div>
				</div>
				
				<input type="submit" value="Register">
				
			</form>
		</div>
		
	</body>
</html>