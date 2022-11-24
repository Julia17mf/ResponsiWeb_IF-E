<?php
	include 'inc.koneksi.php';

	$id 	= $_POST['id'];
	$title 	= $_POST['title'];
	$genre	= $_POST['genre'];

	$sql	= "UPDATE movie SET title='$title', genre='$genre' WHERE id_movie='$id'";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: ../main.php");
	} else {
		echo "Input Data Gagal.";
	}
?>