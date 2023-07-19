<?php
	require "connect.php";
	$query = "SELECT DISTINCT * FROM playlist ORDER BY rand(" . date("Ymd"). ") LIMIT 10";
	
	class PlaylistToday{
		function PlaylistToday($idplaylist, $ten, $hinh){
			$this -> IdPlaylist = $idplaylist;
			$this -> Ten = $ten;
			$this -> HinhPlaylist = $hinh;
		}
	}
	$arrayplaylistfortoday = array();
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arrayplaylistfortoday, new PlaylistToday($row['IdPlayList']
			,$row['TenPlayList']
			,$row['HinhNen']));
	}
	echo json_encode($arrayplaylistfortoday);

?>