<?php

	require "connect.php";
	class BaiHatThuVienPlayList{
		function BaiHatThuVienPlayList($idbaihatthuvienplaylist, $idthuvienplaylist, $idbaihat, $tenbaihat, $hinhbaihat, $casi, $linkbaihat){
		    $this -> IdBaiHatThuVienPlayList = $idbaihatthuvienplaylist;
		    $this -> IdThuVienPlayList = $idthuvienplaylist;
			$this -> IdBaiHat = $idbaihat;
			$this -> TenBaiHat = $tenbaihat;
			$this -> HinhBaiHat = $hinhbaihat;
			$this -> TenCaSi = $casi;
			$this -> LinkBaiHat = $linkbaihat;
		}
	}
	$arraydanhsachbaihat = array();

    $idthuvienplaylist = $_POST['idthuvienplaylist'];
	$query = "SELECT * FROM baihatthuvienplaylist WHERE FIND_IN_SET('$idthuvienplaylist', IdThuVienPlayList)";
	
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraydanhsachbaihat, new BaiHatThuVienPlayList(
		    $row['IdBaiHatThuVienPlayList']
		    ,$row['IdThuVienPlayList']
		    ,$row['IdBaiHat']
			,$row['TenBaiHat']
			,$row['HinhBaiHat']
			,$row['TenCaSi']
			,$row['LinkBaiHat']));
	}
	echo json_encode($arraydanhsachbaihat);

?>