<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(!isset($_COOKIE['pharm_code'])) 
		header('location: Home.php');
?>

<html>
	<head>
		<title>Initialize</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home2.php" style="text-decoration: none;">Home</a>
			<a href="Logout.php" style="text-decoration: none;">Log out</a>
		</div>
		<div class="options">
			<form action = "Initialize.php" method = "POST">
				<div class="row">
					<div class="col-25">
						<label>Medicine Name</label>
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
				
				<div class="row">
					<div class="col-25">
						<label>Company</label>
					</div>
					<div class="col-75">
						<select name = "mediComp" required>
						<option>ACI Limited</option>
						<option>Acme Laboratories Limited</option>
						<option>Aexim Pharmaceuticals Ltd</option>
						<option>Albion Pharmaceuticals Ltd</option>
						<option>Alco Pharma Ltd</option>
						<option>Banani, Dhaka</option>
						<option>Dhanmondi, Dhaka</option>
						<option>Bashabo, Dhaka</option>
						<option>Khilkhet, Dhaka</option>
						</select>
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label>Quantity</label>
					</div>
					<div class="col-75">
						<input type="text" name="medicineName" placeholder="Quantity" required>
					</div>
				</div>
				<input type="submit" value="Enter">
			</form>
		</div>
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>