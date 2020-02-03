<?php
	$exp = time() - 100;
	setcookie("pharm_code", "", $exp);
	setcookie("area_code", "", $exp);
	header('location: home.php');
?>