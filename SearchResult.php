<?php
	//This code is to give access this page if a account is not logged in 
	session_start();
	if(isset($_COOKIE['pharm_code'])) 
		header('location: Home2.php');
?>
<html>
	<head>
		<title>Result</title>
		<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	<body>
		<div class = "shortcuts">
			<a href="Home.php" style="text-decoration: none;">Home</a>
		</div>
		
		<div  class="list" style="position: absolute; top: 20%; left: 40%;">
		<?php
			$medicineName = $_POST['medicineName'];
			$areaName = $_POST['areaName'];
			
			$con = mysqli_connect('localhost', 'root', '1234');
			mysqli_select_db($con, '3_1_project');
			
			//getting area code from database
			/*
			$query = "SELECT P.pharm_name, P.address, P.mobile_no
					  FROM pharmacy_table P
					  INNER JOIN location_table L ON P.area_code = L.code
					  INNER JOIN medicine_tabel M ON M.medi_name = '$medicineName'
					  INNER JOIN medi_in_pharm_table MP ON MP.medi_code = M.medi_code AND MP.pharm_code = P.pharm_code
					  WHERE L.area = '$areaName' AND MP.quantity>0 AND 
					  (
					  (CAST(P.opening_time AS TIME)<=CAST(P.closing_time AS TIME) AND CAST(CURRENT_TIME() AS TIME)>=CAST(P.opening_time AS TIME) AND CAST(CURRENT_TIME() AS TIME)<=CAST(P.closing_time AS TIME)) OR 
					  (CAST(P.opening_time AS TIME)>CAST(P.closing_time AS TIME) AND ((CAST(CURRENT_TIME() AS TIME)>=CAST(P.opening_time AS TIME)) OR (CAST(CURRENT_TIME() AS TIME)<=CAST(P.closing_time AS TIME))))
					  )";
			*/
			$query = "CALL save_search('$medicineName', '$areaName')";
			$result = mysqli_query($con, $query);
			
			$query = "CALL search('$medicineName', '$areaName')";
			$result = mysqli_query($con, $query);
			$numOfRows = mysqli_num_rows($result);
			if($numOfRows>0) {
				echo "Pharmacy Name     Address                    Mobile<br>";
				echo "----------------  -----------                ----------<br>";
				while($row = $result->fetch_assoc()) 
					echo "".$row['pharm_name']."     ".$row['address']."         ".$row['mobile_no']."         ".$row['price']."<br>";
			}
			
			
		?>
		</div>
		
		<footer>
			<p>This project is created by: Kazi Nur Alam Mashry</br>
			<Strong>Email: </strong>kazimashry@gmail.com</p>
		</footer>
		
	</body>
</html>