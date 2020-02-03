<?php
	//connecting with database
	session_start();
	$con = mysqli_connect('localhost', 'root', '1234');
	mysqli_select_db($con, '3_1_project');

	//initializing the values from the user input form
	$adminName = $_POST["adminName"];
	$pharmName = $_POST["pharmName"];
	$areaName = $_POST["areaName"];
	$mobileNo = $_POST["mobileNo"];
	$address = $_POST["address"];
	$openingTime = $_POST["openingTime"];
	$closingTime = $_POST["closingTime"];
	$password = $_POST["password"];
	$confirmPassword = $_POST["confirmPassword"];

	//getting area code from database
	$query = "SELECT code FROM location_table where area = '$areaName'";
	$result = mysqli_query($con, $query);
	$row = $result->fetch_assoc();
	$areaCode = $row['code'];
			
	//checking if the pharmacy is already registered
	$query = "SELECT pharm_name, address FROM pharmacy_table where area_code = '$areaCode'";
	$result = mysqli_query($con, $query);
	$numOfRows = mysqli_num_rows($result);
	$bool = true;
	if($numOfRows>0) {
		while($row = $result->fetch_assoc()) {
			if($row['pharm_name']==$pharmName && $row['address']==$address) {
				header('location: unsuccessful.php');
				$bool = false;
			}
		}
	}
			
	//checking if password==confirmed password
	if($password!=$confirmPassword) {
		header('location: unsuccessful2.php');
		$bool = false;
	}
			
	//Completing registration
	if($bool == true) {
		$query = "SELECT * FROM pharmacy_table WHERE area_code='$areaCode'";
		$result = mysqli_query($con, $query);
		$numOfRows = mysqli_num_rows($result)+1;
		$pharmCode = ($areaCode*1000)+$numOfRows;
		$query = "INSERT INTO 
					pharmacy_table(pharm_code,area_code,pharm_name,admin_name,mobile_no,opening_time,closing_time,address,password)
					VALUES 
						('$pharmCode','$areaCode','$pharmName','$adminName','$mobileNo','$openingTime','$closingTime','$address','$password')";
			
		$reg = mysqli_query($con, $query);
		$exp = time() + 3 * 86400;
		setcookie("pharm_code", $pharmCode, $exp);
		setcookie("area_code", $areaCode, $exp);
		header('location: successful.php');
	}
?>
