<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web Programlama</title>

        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
      
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
       
        <link rel="stylesheet" href="css/style.css">
        
       
        <link href="css/animate.css" rel="stylesheet">
  
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Qwigley" >
  
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   </head>
   <?php include 'header.php'; 
   
   $host="localhost";
   $db="webprogramlama";
   $user="root";
   $pass="";
   $conn=mysqli_connect($host,$user,$pass, $db);
   mysqli_select_db($conn,$db);
   
   $sql="select * from hakkinda";
   $sorgu=mysqli_query($conn,$sql);
  
   while ($sonuc=mysqli_fetch_array($sorgu)){
    $image_src = "img/".$sonuc['HakkindaFoto'];

   
    echo '<div class="col-md-10 col-xs-offset-1">';
    echo ' <div class="hr"></div>';
    echo ' <div class="holder wow fadeIn" data-wow-delay="0.1s">';
    echo '<div class="holder wow fadeIn" data-wow-delay="0.1s">';
    echo '<h1>'.$sonuc['hakkindabaslik'].'</h1>';
    echo '<p>'.$sonuc['HakkindaMetin'].'</p>';
    echo '<img src="'.$image_src.'" width = "1000px" height = "300px" class="align-self-start mr-3" alt="...">';
    echo '</div></div></div>';
 

    }
       ?>  </div>
   <?php include 'footer.php' ?>
      </div>
   </div>
   <script src="js/jquery-1.11.0.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/smoothscroll.js"></script>
   <script src="js/wow.js"></script>
    
    <script>
    new WOW().init();
    </script>


</body>
</html>
