<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(!isset($_COOKIE['pharm_code'])) 
		header('location: Home.php');
?>

<html>
	<head>
		<title>Account</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home2.php" style="text-decoration: none;">Home</a>
			<a href="Logout.php" style="text-decoration: none;">Log out</a>
		</div>
		<div class="options">
			<a href="add_to_storage.php"><button class="upper-right"><h3>Add to storage</h3></button></a></br>
			<a href="Sell.php"><button class="upper-left"><h3>Sell</h3></button></a></br>
			<a href="Transactions.php"><button class="lower-right"><h3>Transactions</h3></button></a></br>
			<a href="Storage.php"><button class="lower-left"><h3>Storage</h3></button></a></br>
		</div>
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>