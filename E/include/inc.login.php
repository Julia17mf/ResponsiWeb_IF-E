<?php
	session_start();
	//menghubungkan koneksi
	include 'inc.koneksi.php';

	//menangkap data yang dikirim dari form
	$username	= $_POST['username'];
	$password	= $_POST['password'];

	//menyeleksi data admin dengan username dan password yang sesuai
	$sql		= "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$data 		= mysqli_query($connect, $sql)
				or die(mysqli_error($connect));

	//menghitung jumlah yang ditemukan
	$cek		= mysqli_num_rows($data);

	if($cek > 0) {
		$_SESSION['username']	= $username;
		$_SESSION['status']		= "login";
		header("location: ../main.php");
	}
	else
	{
		header("location: ../index.php?pesan=gagal");
	}
?>