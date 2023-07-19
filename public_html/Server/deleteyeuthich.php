<?php

 require "connect.php";
 
 $username =  $_POST["username"];
 $idbaihat = $_POST["idbaihat"];

 $sql = "DELETE FROM nguoidungyeuthich WHERE UserName = '$username' AND IdBaiHat = '$idbaihat'";
 
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