<?php

 require "connect.php";

 $username = $_POST["username"];
 $password = $_POST["password"];

 $sql = "UPDATE nguoidung SET Password = '$password' WHERE UserName = '$username' ";
 
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