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
	<div class="bs-example">
    <center><h1>Form Pendaftaran Pasien</h1></center></br>
    <form class="form-horizontal" action="../Source/doRegistration.php" method="POST">
	<div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Nama Lengkap:</label>
            <div class="col-xs-5">
                <input name = "nama" type="text" class="form-control" id="Nama" placeholder="Nama Anda" required>
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="inputUsername">Username:</label>
            <div class="col-xs-5">
                <input name = "username" type="Username" class="form-control" id="inputUsername" placeholder="Username" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-5">
                <input name = "email" type="email" class="form-control" id="inputEmail" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Password:</label>
            <div class="col-xs-5">
                <input name = "password" type="password" class="form-control" id="inputPassword" placeholder="Masukan Password" required>
            </div>
        </div>
       <div class="form-group">
            <label class="control-label col-xs-3">Tanggal Lahir:</label>
            <div class="col-xs-1">
					<select name = "tgl_lahir" class="form-control" required>
					<option disabled selected>Tgl</option>
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
            </div>
            <div class="col-xs-1">
                <select name = "bulan" class="form-control" required>
                    <option disabled selected>Bulan</option>
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
							<option value="12">Desember</option>
                </select>
            </div>
            <div class="col-xs-1">
                <select name = "tahun" class="form-control" required>
                    <option disabled selected>Tahun</option>
							<option value="16">2016</option>
							<option value="15">2015</option>
							<option value="14">2014</option>
							<option value="13">2013</option>
							<option value="12">2012</option>
							<option value="11">2011</option>
							<option value="10">2010</option>
							<option value="09">2009</option>
							<option value="08">2008</option>
							<option value="07">2007</option>
							<option value="06">2006</option>
							<option value="05">2005</option>
							<option value="04">2004</option>
							<option value="03">2003</option>
							<option value="02">2002</option>
							<option value="01">2001</option>
							<option value="00">2000</option>
							<option value="99">1999</option>
							<option value="98">1998</option>
							<option value="97">1997</option>
							<option value="96">1996</option>
							<option value="95">1995</option>
							<option value="94">1994</option>
							<option value="93">1993</option>
							<option value="92">1992</option>
							<option value="91">1991</option>
							<option value="90">1990</option>
							<option value="89">1989</option>
							<option value="88">1988</option>
							<option value="87">1987</option>
							<option value="86">1986</option>
							<option value="85">1985</option>
							<option value="84">1984</option>
							<option value="83">1983</option>
							<option value="82">1982</option>
							<option value="81">1981</option>
							<option value="80">1980</option>
							<option value="79">1979</option>
							<option value="78">1978</option>
							<option value="77">1977</option>
							<option value="76">1976</option>
							<option value="75">1975</option>
							<option value="74">1974</option>
							<option value="73">1973</option>
							<option value="72">1972</option>
							<option value="71">1971</option>
							<option value="70">1970</option>
							<option value="69">1969</option>
							<option value="68">1968</option>
							<option value="67">1967</option>
							<option value="66">1966</option>
							<option value="65">1965</option>
							<option value="64">1964</option>
							<option value="63">1963</option>
							<option value="62">1962</option>
							<option value="61">1961</option>
							<option value="60">1960</option>
							<option value="59">1959</option>
							<option value="58">1958</option>
							<option value="57">1957</option>
							<option value="56">1956</option>
							<option value="55">1955</option>
							<option value="54">1954</option>
							<option value="53">1953</option>
							<option value="52">1952</option>
							<option value="51">1951</option>
							<option value="50">1950</option>
							<option value="49">1949</option>
							<option value="48">1948</option>
							<option value="47">1947</option>
							<option value="46">1946</option>
							<option value="45">1945</option>
							<option value="44">1944</option>
							<option value="43">1943</option>
							<option value="42">1942</option>
							<option value="41">1941</option>
							<option value="40">1940</option>
                </select>
					</div>
				</div>
		 <div class="form-group">
            <label class="control-label col-xs-3">Jenis Kelamin:</label>
            <div class="col-xs-1">
                <label class="radio-inline">
                    <input name = "jk" type="radio" value="Laki-laki" required> Laki-laki
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input name = "jk" type="radio" value="Perempuan" required> Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
            <div class="col-xs-5">
                <textarea name = "alamat" rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap" required></textarea>
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="telp">No. Telp:</label>
            <div class="col-xs-2">
                <input name = "nmr_telepon" type="tel" class="form-control" id="telp" placeholder="Nomor Telepon/Handphone" required>
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