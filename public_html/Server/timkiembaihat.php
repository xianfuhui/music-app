<?php

	require "connect.php";

	class BaiHat{
		function BaiHat($idbaihat, $tenbaihat, $hinhbaihat, $casi, $linkbaihat, $luotthich){
			$this -> IdBaiHat = $idbaihat;
			$this -> TenBaiHat = $tenbaihat;
			$this -> HinhBaiHat = $hinhbaihat;
			$this -> TenCaSi = $casi;
			$this -> LinkBaiHat = $linkbaihat;
			$this -> LuotThich = $luotthich;
		}
	}

	$mangcakhuc = array();
	if (isset($_POST['tukhoa'])) {
		$tukhoa = $_POST['tukhoa'];
		$query = "SELECT * FROM baihat WHERE lower(TenBaiHat) LIKE '%$tukhoa%'";
		$data = mysqli_query($con, $query);
		while ($row = mysqli_fetch_assoc($data)) {
			array_push($mangcakhuc, new BaiHat($row['IdBaiHat']
				,$row['TenBaiHat']
				,$row['HinhBaiHat']
				,$row['TenCaSi']
				,$row['LinkBaiHat']
				,$row['LuotThich']));
		}
	}
		echo json_encode($mangcakhuc);
?>