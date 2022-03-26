
<?php
$host="localhost";
$db="webprogramlama";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass) or die("Mysql Baglanamadi");
 
mysqli_select_db($conn,$db) or die("Veritabanina Baglanilamadi");

if (isset($_POST['giris'])){
	$username = $_POST['username'];
	$sifre = $_POST['password'];
 
	$sql_check = mysqli_query($conn, "select * from login where kullanıcıad='".$username."' and kullanıcısifre='".$sifre."' ") or die(mysql_error());
 
	if(mysqli_num_rows($sql_check))  {
		ob_start();
		session_start();
		$_SESSION["login"] = "true";
    	$_SESSION["kullaniciad"] = $username;
    	$_SESSION["sifre"] = $sifre;
    	header("Location: ../Admin/index.php");
	}
	else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
	}
}
?>


<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Kullanıcı Girişi</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Clear login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	
</head>

<body>
	<h1>Kullanıcı Girişi </h1>
	<div class="w3ls-login box box--big">
	
		<form action="#" method="post">
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Kullanıcı Adı </label>
				<input type="text" name="username" placeholder="Kullanıcı adı giriniz" required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> Şifre </label>
				<input type="password" name="password" placeholder="Şifre Giriniz " required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					
				</div>
			</div>

			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
		
			<div class="w3ls-bot">
				<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						Şifre Kayıtlı Kalsın
					</label>
				</div>
				<div class="form-end">
					<input type="submit" name="giris" value="GİRİŞ">
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	
	<div class="copy-wthree">
		
	</div>
	
</body>

</html>