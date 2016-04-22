<?php
	include('connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tgl = $_POST['tgl_lahir'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	
	$tgl_lahir = $tahun."-".$bulan."-".$tgl;
	
		
	$jk = $_POST['jk'];
	
	$alamat = $_POST['alamat'];
	$nmr_telepon = $_POST['nmr_telepon'];	
	
	$sql = "INSERT INTO ms_user VALUES ('$username','$password')";
	$result = mysqli_query($conn, $sql);
	$sql1 = "INSERT INTO detail_user VALUES ('$username','$nama','$email','$tgl_lahir','$jk','$alamat','$nmr_telepon')";
	$result1 = mysqli_query($conn, $sql1);
	$sql2 = "INSERT INTO tr_user VALUES ('$username','daftar diri', now())";
	$result2 = mysqli_query($conn, $sql2);
	
	header('Location: ../Module/reload.php');
?>