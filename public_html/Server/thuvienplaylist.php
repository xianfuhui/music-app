<?php
	require "connect.php";
	
	class thuvienplaylist{
		function thuvienplaylist($idthuvienplaylist, $tenthuvienplaylist, $hinhthuvienplaylist, $username){
			$this -> IDThuVienPlayList = $idthuvienplaylist;
			$this -> TenThuVienPlayList = $tenthuvienplaylist;
			$this -> HinhThuVienPlayList = $hinhthuvienplaylist;
			$this -> UserName = $username;
		}
	}
	$arraythuvienplaylist = array();
	
	if(isset($_POST['username'])){
        $username = $_POST['username'];
		$query = "SELECT * FROM thuvienplaylist WHERE FIND_IN_SET('$username', UserName)";
	}
	
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraythuvienplaylist, new thuvienplaylist($row['IDThuVienPlayList']
			,$row['TenThuVienPlayList']
			,$row['HinhThuVienPlayList']
			,$row['UserName']));
	}
	echo json_encode($arraythuvienplaylist);

?>