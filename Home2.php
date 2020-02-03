<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(!isset($_COOKIE["pharm_code"])) 
		header('location: Home.php');
?>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Initialize.php" style="text-decoration: none;">Initialize</a>
			<a href="Logout.php" style="text-decoration: none;">Log out</a>
		</div>
		<div class="options">
			<a href="Account.php"><button class="up"><h3>My Account</h3></button></a></br>
			<a href="MostSearchedMedicineList.php"><button class="down"><h3>Most Searched Medicine</h3></button></a>
		</div>
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>