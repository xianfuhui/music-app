<?php
	require "connect.php";
	$query = "SELECT DISTINCT * FROM bangxephang ORDER BY rand(" . date("Ymd"). ") LIMIT 10";
	
	class BangXepHangCurrent{
		function BangXepHangCurrent($idbangxephang, $ten, $hinh){
			$this -> IdBangXepHang = $idbangxephang;
			$this -> TenBangXepHang = $ten;
			$this -> HinhBangXepHang = $hinh;
		}
	}
	$arraynghesicurrent = array();
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraynghesicurrent, new BangXepHangCurrent($row['IdBangXepHang']
			,$row['TenBangXepHang']
			,$row['HinhBangXepHang']));
	}
	echo json_encode($arraynghesicurrent);

?>