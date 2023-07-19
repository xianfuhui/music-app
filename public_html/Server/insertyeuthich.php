<?php

 require "connect.php";
 
 $username = $_POST["username"];
 $idbaihat = $_POST["idbaihat"];
 $tenbaihat = $_POST["tenbaihat"];
 $tencasi = $_POST["tencasi"];
 $hinhbaihat = $_POST["hinhbaihat"];
 $linkbaihat = $_POST["linkbaihat"];

 $sql = "INSERT INTO nguoidungyeuthich (UserName,IdBaiHat,TenBaiHat,TenCaSi,HinhBaiHat,LinkBaiHat) VALUES 
 ('$username','$idbaihat' ,'$tenbaihat', '$tencasi', '$hinhbaihat', '$linkbaihat')";
 
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