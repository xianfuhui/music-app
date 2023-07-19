<?php

 require "connect.php";
 	
 if(isset($_POST['idbaihatthuvien'])){
     $idbaihatthuvien = $_POST['idbaihatthuvien'];
 	 $sql = "DELETE FROM baihatthuvienplaylist WHERE IdBaiHatThuVienPlayList = '$idbaihatthuvien'";
 }
 if(isset($_POST['idthuvien'])){
     $idthuvien = $_POST['idthuvien'];
 	 $sql = "DELETE FROM baihatthuvienplaylist WHERE IdThuVienPlayList = '$idthuvien'";
 }
 
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