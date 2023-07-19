<?php
	require "connect.php";
	$query = "SELECT DISTINCT * FROM thinhhanh ORDER BY rand(" . date("Ymd"). ") LIMIT 10";
	
	class ThinhHanhCurrent{
		function ThinhHanhCurrent($idthinhhanh, $ten, $hinh){
			$this -> IdThinhHanh = $idthinhhanh;
			$this -> TenThinhHanh = $ten;
			$this -> HinhThinhHanh = $hinh;
		}
	}
	$arraythinhhanhcurrent = array();
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraythinhhanhcurrent, new ThinhHanhCurrent($row['IdThinhHanh']
			,$row['TenThinhHanh']
			,$row['HinhThinhHanh']));
	}
	echo json_encode($arraythinhhanhcurrent);

?>