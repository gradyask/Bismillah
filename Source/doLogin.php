<?php
	include ('connect.php');
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT username FROM ms_user";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$sql1 = "SELECT password FROM ms_user WHERE username='$username'";
		$result1 = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result1);
		
		
		if ($password == $row["password"]) {//benar
			$sql2 = "INSERT INTO tr_user VALUES ('$username','Admin login')";
			$result2 = mysqli_query($conn, $sql2);
			//$_SESSION['alert']="masuk";
			header ('Location: ../index.php');
		} else{
			$_SESSION['alert']="gagal";
			header ('Location: ../index.php');
		}
		
		
	}
	else{
		$_SESSION['alert']="gagal";
			header ('Location: ../index.php');
	}

	mysqli_close($conn);

?>