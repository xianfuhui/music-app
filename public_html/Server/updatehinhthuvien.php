<?php

 require "connect.php";

 $idthuvien = $_POST["idthuvien"];
 $hinhthuvien = $_POST["hinhthuvien"];

 $sql = "UPDATE thuvienplaylist SET HinhThuVienPlayList = '$hinhthuvien' WHERE IDThuVienPlayList = '$idthuvien' ";
 
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