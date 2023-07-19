<?php

	require "connect.php";
	class NguoiDungYeuThich{
		function NguoiDungYeuThich($idyeuthich, $username, $idbaihat, $tenbaihat, $hinhbaihat, $casi, $linkbaihat){
		    $this -> IdYeuThich = $idyeuthich;
		    $this -> UserName = $username;
			$this -> IdBaiHat = $idbaihat;
			$this -> TenBaiHat = $tenbaihat;
			$this -> HinhBaiHat = $hinhbaihat;
			$this -> TenCaSi = $casi;
			$this -> LinkBaiHat = $linkbaihat;
		}
	}
	$arraydanhsachbaihat = array();
	
	$username = $_POST['username'];
	$query = "SELECT * FROM nguoidungyeuthich WHERE FIND_IN_SET('$username', UserName)";
	
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraydanhsachbaihat, new NguoiDungYeuThich(
		     $row['IdYeuThich']
		    ,$row['UserName']
		    ,$row['IdBaiHat']
			,$row['TenBaiHat']
			,$row['HinhBaiHat']
			,$row['TenCaSi']
			,$row['LinkBaiHat']));
	}
	echo json_encode($arraydanhsachbaihat);

?>