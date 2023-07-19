<?php
	require "connect.php";
	$query = "SELECT DISTINCT * FROM chude ORDER BY rand(" . date("Ymd"). ") LIMIT 10";
	
	class ChuDeCurrent{
		function ChuDeCurrent($idchude, $ten, $hinh){
			$this -> IdChuDe = $idchude;
			$this -> TenChuDe = $ten;
			$this -> HinhChuDe = $hinh;
		}
	}
	$arraychudecurrent = array();
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraychudecurrent, new ChuDeCurrent($row['IdChuDe']
			,$row['TenChuDe']
			,$row['HinhChuDe']));
	}
	echo json_encode($arraychudecurrent);

?>