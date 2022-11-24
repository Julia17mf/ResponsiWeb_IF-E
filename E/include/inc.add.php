<?php
	include 'inc.koneksi.php';

	$title	= $_POST['title'];
	$genre	= $_POST['genre'];

	$sql	= "INSERT INTO movie VALUES('', '$title', '$genre')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: ../main.php");
	} else {
		echo "Input Data Gagal.";
	}
?>