<?php

	require "connect.php";
	class ThongTinNguoiDung{
		function ThongTinNguoiDung($username, $password, $name, $email, $image){
		    $this -> UserName = $username;
		    $this -> Password = $password;
		    $this -> Name = $name;
		    $this -> Email = $email;
		    $this -> Image = $image;
		}
	}
	$arraynguoidung = array();
	
	$username = $_POST['username'];
	$query = "SELECT * FROM nguoidung WHERE UserName = '$username'";
	
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraynguoidung, new ThongTinNguoiDung(
		     $row['UserName'],
		     $row['Password'],
		     $row['Name'],
		     $row['Email'],
		     $row['Image']));
	}
	echo json_encode($arraynguoidung);

?>