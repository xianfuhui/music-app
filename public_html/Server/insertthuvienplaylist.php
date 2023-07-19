<?php

 require "connect.php";

 $tenthuvien = $_POST["tenthuvien"];
 $hinhthuvien = "https://huy329.000webhostapp.com/icon_thuvien.jpg";
 $username = $_POST["UserName"];

 $sql = "INSERT INTO thuvienplaylist (TenThuVienPlayList,HinhThuVienPlayList,UserName) VALUES ('$tenthuvien','$hinhthuvien' ,'$username')";
 
 $result = mysqli_query($con, $sql);
 if($result){
     $response=array("success"=>"1","message"=>"Registration successfull");
/*	 echo("Registration successfull");*/
 }else{
     $response=array("success"=>"0","message"=>"Registration failed");
	 /*echo("Registration failed");*/
 }
 header('Content-type: application/json');
 echo json_encode($response); 
?>