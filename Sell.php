<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(!isset($_COOKIE["pharm_code"])) 
		header('location: Home.php');
?>

<html>
	<head>
		<title>Sell</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">

			<a href="Home2.php" style="text-decoration: none;">Home</a>
			<a href="Logout.php" style="text-decoration: none;">Log out</a>
		</div>
		<div class="container">
			<form action = "sellComplete.php" method = "post">
				<div class = "row">
					<div class = "col-25">
						<label>Medicine Name<label>
					</div>
					<div class = "col-75">
						<input type = "text" name = "mediName" placeholder="Medicine name" required>
					</div>
				</div>
				<div class = "row">
					<div class = "col-25">
						<label>Company Name<label>
					</div>
					<div class = "col-75">
						<input type = "text" name = "mediComp" placeholder="Company name" required>
					</div>
				</div>
				<div class = "row">
					<div class = "col-25">
						<label>Quantity<label>
					</div>
					<div class = "col-75">
						<input type = "text" name = "quantity" placeholder="Quantity" required>
					</div>
				</div>
				<div class = "row">
					<div class = "col-25">
						<label>Price<label>
					</div>
					<div class = "col-75">
						<input type = "text" name = "price" placeholder="Price" required>
					</div>
				</div>
				<input type="submit" value="Sell">
			</form>
		</div>

		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>