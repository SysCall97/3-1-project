<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(isset($_COOKIE['pharm_code'])) 
		header('location: Home2.php');
?>
<html>
	<head>
		<title>Pharmacy Pannel</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home.php" style="text-decoration: none;">Home</a>
			<a href="Search.php" style="text-decoration: none;">Search Medicine</a>
		</div>
		
		<div class="options">
			<a href="Register.php"><button class="up"><h3>Register</h3></button></a></br>
			<a href="Login.php"><button class="down"><h3>Login</h3></button></a>
		</div>
		
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
		
	</body>
</html>