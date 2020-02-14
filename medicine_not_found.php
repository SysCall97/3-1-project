<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(!isset($_COOKIE['pharm_code'])) 
		header('location: Home.php');
?>

<html>
	<head>
		<title>Opps!</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home2.php" style="text-decoration: none;">Home</a>
			<a href="add_to_storage.php" style="text-decoration: none;">Add To Store</a>
			<a href="Logout.php" style="text-decoration: none;">Log out</a>
		</div>
		<h1>Medicine Not Found</h1>
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>