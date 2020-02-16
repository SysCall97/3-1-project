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
			$query = "CALL get_transactions('$pc')";
			$result = mysqli_query($con, $query);
			$numOfRows = mysqli_num_rows($result);
			if($numOfRows>0) {
				while($row = $result->fetch_assoc()) {
					$con = mysqli_connect('localhost', 'root', '1234');
					mysqli_select_db($con, '3_1_project');
					$mediCode = $row['medi_code'];
					$q = "CALL get_medi_name('$mediCode')";
					$r = mysqli_query($con, $q);
					$rw = $r->fetch_assoc();
					$mediName = $rw['medi_name'];
					echo "Medicine: ".$mediName."<br>";
					echo "Status: ".$row['status']."<br>";
					echo "Quantity: ".$row['quantity']."<br>";
					echo "Price: ".$row['price']."<br>";
					echo "Time: ".$row['time']."<br><br><br>";
				}
			}
		?>
		</div>
	</body>
</html>