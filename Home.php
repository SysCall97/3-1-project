<?php
	//This code is to give access this page if a account is not logged in 
	session_start();
	if(isset($_COOKIE['pharm_code'])) 
		header('location: Home2.php');
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class="options">
			<a href="Search.php"><button class="up"><h3>Search Medicine</h3></button></a></br>
			<a href="Pharm.php"><button class="down"><h3>Pharmacy Pannel</h3></button></a>
		</div>
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>