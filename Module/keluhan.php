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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />

   
</head>

<body>
	<div class="form-keluhan">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-xs-2" for="Nama">Nama:</label>
				<div class="col-xs-5">
				   <?php if($result){while($row = mysqli_fetch_assoc($result)){echo $row['nama'];}}?>
					<input type="text" name="username" value="<?php echo $username;?>" style="display:none;"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-2" for="Keluhan">Keluhan:</label>
				<div class="col-xs-5">
					<textarea rows="8" class="form-control" id="Keluhan" placeholder="Masukan Keluhan Anda"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-2 col-xs-9">
					<input type="submit" class="btn btn-primary" value="Ambil Antrian">
				</div>
			</div>
		</form>
	</div>
    <!-- jQuery-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
    <!-- jQuery-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>