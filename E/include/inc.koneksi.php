<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "movie";

	$connect = new mysqli($hostname,$username,$password,$database);

	if($connect->connect_error){
		die('Error : '. $connect->error);
	}
?>