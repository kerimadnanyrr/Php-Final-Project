<?php
include 'baglan.php';



if(isset($_POST['hakkindaguncelle']))
{
 $id = 1;

 $ayarguncelle = $db->prepare("update hakkinda set HakkindaMetin='".$_POST['HakkindaMetin']."',
 
             HakkindaMetin='".$_POST['HakkindaMetin']."' where Hakkindaİd='$id'");

 $ayarguncelle -> execute();


 if($ayarguncelle -> rowCount() > 0) //Bu kısım PDO için değiştirilmiştir.
 {
  header("Location:hakkinda.php");
 }
 else
 {
  header("Location:hakkinda.php"); 
 }
 }
 






?>
