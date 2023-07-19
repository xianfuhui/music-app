<?php
	$hostname = "localhost";
	$username = "id19910929_musicdb";
	$password = "#TienPhuHuy90";
	$databasename = "id19910929_music";

	$con = mysqli_connect($hostname, $username, $password, $databasename);
	mysqli_query($con, "SET NAMES 'utf8'");
?>