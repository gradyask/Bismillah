<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Aplikasi Booking Antrian Dokter</title>

    <!-- Bootstrap -->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Assets/css/style.css" rel="stylesheet" />

   
</head>
<body>
	<center><h1>APLIKASI BOOKING ANTRIAN DOKTER</h1></center>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
					</div>
					<div class="panel-body">
						<form action="Source/doLogin.php" method="POST">
							<fieldset>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user glyphicon"> Username</i></span>
									<input class="form-control" placeholder="Masukan Username" name="username" type="text" autofocus>
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"> Password</i></span>
									<input class="form-control" placeholder="Masukan Password" name="password" type="password">
								</div>
								<button type="submit" class="btn btn-info btn-block">Login</button>
									
							</fieldset>
						</form>
						<center><a href="Module/daftar.php">SignUpHere</a></center>
					</div>
				</div>
				<?php
									session_start();
									if(isset($_SESSION['alert'])){
										?>
											<div class="alert alert-danger" role="alert"><center>invalid username or password</center></div>
										<?php
									}
									session_destroy();
								?>
			</div>
		</div>
	</div>

    <!-- jQuery-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>