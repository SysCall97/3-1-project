<html>
	<head>
		<title>Registration Successful</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home2.php" style="text-decoration: none;">Home</a>
		</div>
		<div class = "container">
			<h2>Registration Successful</h2>
			<?php 
				session_start();
				echo 'This is your Pharmacy code: '.$_COOKIE["pharm_code"].'. Remeber it for Log in';
			?>
		</div>
		
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
	</body>
</html>