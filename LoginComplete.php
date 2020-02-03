<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '1234');
	mysqli_select_db($con, '3_1_project');
	
	$pharmCode = $_POST['pharmCode'];
	$adminName = $_POST['adminName'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM pharmacy_table WHERE pharm_code = '$pharmCode' && admin_name = '$adminName' && password = '$password'";
	$result = mysqli_query($con, $query);
	$numOfRows = mysqli_num_rows($result);
	if($numOfRows==1) {
		$row = $result->fetch_assoc();
		$exp = time() + 3 * 86400;
		setcookie("pharm_code", $row['pharm_code'], $exp);
		setcookie("area_code", $row['area_code'], $exp);
		header('location: Home2.php');
	} else {
		header('location: LoginError.php');
	}
?>