<?php
	require "connect.php";
	$query = "SELECT DISTINCT * FROM phobien ORDER BY rand(" . date("Ymd"). ") LIMIT 10";
	
	class PhoBienCurrent{
		function PhoBienCurrent($idphobien, $ten, $hinh){
			$this -> IdPhoBien = $idphobien;
			$this -> TenPhoBien = $ten;
			$this -> HinhPhoBien = $hinh;
		}
	}
	$arrayphobiencurrent = array();
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arrayphobiencurrent, new PhoBienCurrent($row['IdPhoBien']
			,$row['TenPhoBien']
			,$row['HinhPhoBien']));
	}
	echo json_encode($arrayphobiencurrent);

?>