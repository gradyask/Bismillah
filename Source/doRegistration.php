<?php
	include('connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	
	$sql = "INSERT INTO ms_user VALUES ('$username','$password')";
	$result = mysqli_query($conn, $sql);
	$sql1 = "INSERT INTO detail_user (username,nama,email,alamat) VALUES ('$username','$nama','$email','$alamat')";
	//$sql1 = "INSERT INTO detail_user VALUES ('$username','$nama','$email','','','$alamat','')";
	$result1 = mysqli_query($conn, $sql1);
	$sql2 = "INSERT INTO tr_user VALUES ('$username','daftar diri')";
	$result2 = mysqli_query($conn, $sql2);
?>