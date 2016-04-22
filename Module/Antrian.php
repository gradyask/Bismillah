<?php
include ('../Source/connect.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Aplikasi Booking Antrian Dokter</title>

     <!-- Bootstrap -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/style.css" rel="stylesheet" />
		 <!-- jQuery-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
</head>
<body>
<table border="1">
		<tr>
			<td>
			Anda Mendapatkan Nomor Antrian
			</td>
			<td>
			:
			</td>
			<td>
				<?php 
				$username = $_GET['user'];
				$sql = "SELECT no FROM tr_antrian WHERE username='$username'";
				$result = mysqli_query($conn, $sql);
				if($result){
					while($row = mysqli_fetch_assoc($result)){
						echo $row['no'];
					}
				}?>
			</td>
		</tr>
		<tr>
			<td>
			Antrian Saat Ini
			</td>
			<td>
			:
			</td>
			<td>
			<?php 
				$sql1 = "SELECT no FROM tr_antrian LIMIT 1";
				$result1 = mysqli_query($conn, $sql1);
				if($result1){
					while($row1 = mysqli_fetch_assoc($result1)){
						echo $row1['no'];
					}
				}?>
			</td>
		</tr>
	</table>
</body>
</html>