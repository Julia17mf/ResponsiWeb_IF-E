<?php
	include 'inc.koneksi.php';

	$id 	= $_GET['id'];

	$sql	= "DELETE FROM movie WHERE id_movie='$id'";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: ../main.php");
	} else {
		echo "Hapus Data Gagal.";
	}
?>