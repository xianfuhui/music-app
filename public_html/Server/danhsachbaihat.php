<?php

	require "connect.php";
	class BaiHat{
		function BaiHat($idbaihat, $tenbaihat, $hinhbaihat, $casi, $linkbaihat){
			$this -> IdBaiHat = $idbaihat;
			$this -> TenBaiHat = $tenbaihat;
			$this -> HinhBaiHat = $hinhbaihat;
			$this -> TenCaSi = $casi;
			$this -> LinkBaiHat = $linkbaihat;
		}
	}
	$arraydanhsachbaihat = array();
	

	
	if(isset($_POST['idplaylist'])){
        $idplaylist = $_POST['idplaylist'];
		$query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idplaylist', IdPlayList)";
	}
	
	if(isset($_POST['idnghesi'])){
        $idnghesi = $_POST['idnghesi'];
		$query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idnghesi', IdNgheSi)";
	}
	
	if(isset($_POST['idthinhhanh'])){
        $idthinhhanh = $_POST['idthinhhanh'];
		$query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idthinhhanh', IdThinhHanh)";
	}
	
	if(isset($_POST['idchude'])){
        $idchude = $_POST['idchude'];
		$query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idchude', IdChuDe)";
	}
	if(isset($_POST['idphobien'])){
        $idphobien = $_POST['idphobien'];
		$query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idphobien', IdPhoBien)";
	}


	if(isset($_POST['idbangxephang'])){
        $idbangxephang = $_POST['idbangxephang'];
		$query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idbangxephang', IdBangXepHang)";
	}
	if(isset($_POST['idthuvienplaylist'])){
        $idbangxephang = $_POST['idthuvienplaylist'];
		$query = "SELECT * FROM baihatthuvienplaylist WHERE FIND_IN_SET('$idthuvienplaylist', IdThuVienPlayList)";
	}
	
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraydanhsachbaihat, new BaiHat($row['IdBaiHat']
			,$row['TenBaiHat']
			,$row['HinhBaiHat']
			,$row['TenCaSi']
			,$row['LinkBaiHat']));
	}
	echo json_encode($arraydanhsachbaihat);

?>