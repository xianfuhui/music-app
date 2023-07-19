<?php

 require "connect.php";

 $username = $_POST["UserName"];
 $password = $_POST["Password"];
 $name = $_POST["Name"];
 $email = $_POST["Email"];
 $image = $_POST["Image"];

 $sql = "INSERT INTO nguoidung (username, password, name, email, image) VALUES
 ('$username','$password','$name' ,'$email', '$image')";
 
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