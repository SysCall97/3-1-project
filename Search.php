<?php
	//This code is to give access this page if a account is not logged in 
	session_start();
	if(isset($_COOKIE['pharm_code'])) 
		header('location: Home2.php');
?>
<html>
	<head>
		<title>Search</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	
	<body>
		<div class = "shortcuts">
			<a href="Home.php" style="text-decoration: none;">Home</a>
		</div>
		
		<div class = "container">
			<form action="SearchResult.php" method="POST">
				
				<div class="row">
					<div class="col-25">
						<label>Medicine Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="medicineName" placeholder="Medicine name" required>
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
				
				<input type="submit" value="Search">
			</form>
		</div>
		
	</body>
</html>