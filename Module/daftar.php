<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Aplikasi Booking Antrian Dokter</title>

     <!-- Bootstrap -->
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/css/style.css" rel="stylesheet" />
	<!--Jquery-->
		<script src="../Assets/js/date/jquery-2.1.3.min"></script>
		<script src="../Assets/js/date/jquery.date-dropdowns.js"></script>
		<link href="../Assets/js/date/styles.css" rel="stylesheet">
		 <!-- jQuery-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
</head>

<script>
	$(document).ready(function(){
		$('.example1').dateDropdowns();
	});
</script>

<body>
	<div class="bs-example">
    <center><h1>Form Pendaftaran Pasien</h1></center></br>
    <form class="form-horizontal" action="../Source/doRegistration.php" method="POST">
	<div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Nama Lengkap:</label>
            <div class="col-xs-5">
                <input name = "nama" type="text" class="form-control" id="Nama" placeholder="Nama Anda">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="inputUsername">Username:</label>
            <div class="col-xs-5">
                <input name = "username" type="Username" class="form-control" id="inputUsername" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-5">
                <input name = "email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Password:</label>
            <div class="col-xs-5">
                <input name = "password" type="password" class="form-control" id="inputPassword" placeholder="Masukan Password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Tanggal Lahir:</label>
            <div class="col-xs-1">
                
            </div>
            <div class="col-xs-1 wrapper">
                <div class="example">
					<div class="date-dropdowns">
						<input type="text" id="example" readonly="readonly">
						<select class="day" name="date_[day]">
							<option value="00">Day</option>
							<option value="01">1</option>
							<option value="02">2</option>
							<option value="03">3</option>
							<option value="04">4</option>
							<option value="05">5</option>
							<option value="06">6</option>
							<option value="07">7</option>
							<option value="08">8</option>
							<option value="09">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<select class="month" name="date_[month]">
							<option value="00">Month</option>
							<option value="01">Januari</option>
							<option value="02">Februari</option>
							<option value="03">Maret</option>
							<option value="04">April</option>
							<option value="05">Mei</option>
							<option value="06">Juni</option>
							<option value="07">Juli</option>
							<option value="08">Agustus</option>
							<option value="09">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desenber</option>
						</select>
						<select class="year" name="date_[year]">
							<option value="00">Year</option>
							<option value="01">2016</option>
							<option value="02">2015</option>
							<option value="03">2014</option>
							<option value="04">2013</option>
							<option value="05">2012</option>
							<option value="06">2011</option>
							<option value="07">2010</option>
							<option value="08">2009</option>
							<option value="09">2008</option>
							<option value="10">2007</option>
							<option value="11">2006</option>
							<option value="12">2005</option>
						</select>
					</div>
				</div>
            </div>
        </div>
		 <div class="form-group">
            <label class="control-label col-xs-3">Jenis Kelamin:</label>
            <div class="col-xs-1">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
            <div class="col-xs-5">
                <textarea name = "alamat" rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap"></textarea>
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="telp">No. Telp:</label>
            <div class="col-xs-2">
                <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon/Handphone">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>
   
</body>
</html>