 <?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php
$servername = "localhost";
$database = "webprogramlama";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['hakkindatext'])) {

    $degisken=htmlspecialchars($_POST['hakkindatext']);
    $foto=htmlspecialchars($_POST['foto1']);
    $altmetin=htmlspecialchars($_POST['hakkindatextalt']);

    $sql = "INSERT INTO hakkinda (HakkindaMetin, HakkindaFoto,HakkindaAltmetin) VALUES ('".$degisken."','".$foto."','".$altmetin."')";

    if (mysqli_query($conn, $sql)) {
      echo "Başarılı";

    }

    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else{
    echo "Form verisi gelmedi";
}





?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Hakkında Sayfası</h1>
                        <h1 class="page-subhead-line">Hakkında Sayfasına Hoşgeldiniz. </h1>
                    </div>
                </div>
                <form action="" method="POST"> 
                <div class="form-group">
                                           
                                        </div>
                                           <div class="form-group  ">
                                            <label>Hakkında Foto</label>
                                            <input class="form-control" type="file"  name="foto1">
                                    
                                        </div>
                                            <div class="form-group  ">
                                            <label>Şehir Hakkında</label>
                                            <textarea  class="form-control" rows="3"  name="hakkindatext" ><?php echo $cikti["HakkindaMetin"]?></textarea>
                                        </div>

                                        <div class="form-group  ">
                                            <label>Şehir Hakkında Alt Metin</label>
                                            <textarea  class="form-control" rows="3"  name="hakkindatextalt" ><?php echo $cikti["HakkindaAltmetin"]?></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Kaydet" name="hakkindaguncelle">
            
        </div>
        </form>

            </div>
            
    



<?php include 'Footer.php'; ?>


