<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "quanlykho";
	$mysqli = new mysqli($host, $user, $password, $dbname);
	$code_promotion='';
	$sale='';
	
	$sql = "select * FROM 'promotion'";
	$result = mysqli_query($mysqli, $sql);

	while ($row = mysqli_fetch_array($result)) {
	    $code_promotion = $code_promotion .'"'.$row['code_promotion'].'",';
	    $sale = $sale .'"'.$row['sale'].'",';
	}
	$code_promotion=trim($code_promotion,",");
	$sale=trim($sale,",");
	return $code_promotion;
	return $sale;
?>