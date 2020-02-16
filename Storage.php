<?php
	//This code is to give access this page if a account is logged in 
	session_start();
	if(!isset($_COOKIE["pharm_code"])) 
		header('location: Home.php');
?>
<html>
	<head>
		<title>Transactions</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home2.php" style="text-decoration: none;">Home</a>
			<a href="Logout.php" style="text-decoration: none;">Log out</a>
		</div>
		<?php
			$con = mysqli_connect('localhost', 'root', '1234');
			mysqli_select_db($con, '3_1_project');
			$pc = $_COOKIE["pharm_code"];
			$query = "CALL get_storage('$pc')";
			$result = mysqli_query($con, $query);
			$numOfRows = mysqli_num_rows($result);
			if($numOfRows>0) {
				while($row = $result->fetch_assoc()) {
					echo "<br><br>Medicine Name: ".$row['medi_name']."<br>";
					echo "Quantity: ".$row['quantity'];
				}
			} else {
				echo "Empty  :( "."<br>";
			}
		?>
		</div>
	</body>
</html>