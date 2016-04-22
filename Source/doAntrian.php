<?php
	include ('connect.php');
	
	$username = $_POST['username'];
	$keluhan = $_POST['keluhan'];
	$nomor_antrian = 1;
	
	$sql = "SELECT no FROM tr_antrian ORDER BY no DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$antrian_sekarang = $row['no'];
			$temp = (int)$antrian_sekarang;
			$nomor_antrian=$temp+1;
			$sql1 = "INSERT INTO tr_antrian (no, username, jam_masuk, tanggal, keluhan) VALUES ($nomor_antrian,'$username',now(),now(),'$keluhan')";
			$result1 = mysqli_query($conn, $sql1);
			header("Location: ../Module/Antrian.php?user=$username");
			//echo $sql1;
			}
	}
	else{
		$sql1 = "INSERT INTO tr_antrian (no, username, jam_masuk, tanggal, keluhan) VALUES ($nomor_antrian,'$username',now(),now(),'$keluhan')";
		$result1 = mysqli_query($conn, $sql1);
		header("Location: ../Module/Antrian.php?user=$username");
		//echo $sql1;
	}
?>