
<?php 
include ('baglan.php');
$query = $db->query("SELECT * FROM hakkinda", PDO::FETCH_ASSOC);

try {

  $baglanti = new PDO("mysql:host=localhost;dbname=webprogramlama", "root", "");
  $baglanti->exec("SET NAMES utf8");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sorgu = $baglanti->prepare("SELECT Hakkindaİd, HakkindaMetin, HakkindaFoto FROM hakkinda");
  $sorgu->execute();

  foreach ($sorgu as $cikti) {
  }
} catch (PDOException $e) {
  die($e->getMessage());
}
?>

    <head>
        <title>Web Ptogramlama</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/style.css">
        <link href="css/animate.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Qwigley" />
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   </head>
   <body>
   
  
   <div class="wrapper">
  	  <div class="col-md-12">
        
         <div class="brand wow fadeIn" data-wow-delay="0.1s"> KAYSERI
         
         </div>
         <nav class="navbar navbar-default" role="navigation">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand"><a href="#"></a>
                <div class="title"> </div>
                </div>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   
                    <li>
                       <a href="index.php">Anasayfa</a>
                    </li>
                    <li>
                       <a href="hakkimda.php">Sehir Hakkında</a>
                    </li>
                    <li>
                      <a href="turistik.php">Turistik Yerler</a>
                    </li>
                    <li>
                      <a  href="yemekler.php">Yemekler</a>
                    </li>
                    <li>
                      <a href="iletisim.php">İletişim</a>
                    </li>
                    <li>
                      <a href ="login/login.php">Kullanıcı Girişi</a>
                    </li>
                </ul>
            </div>
          
         </nav>
         

