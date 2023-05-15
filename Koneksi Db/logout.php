<?php 
 include "koneksi_db.php";
 if(isset($_POST['user'])and isset($_POST['pw'])){
   $use = $_POST['user'] ;
   $pw = md5($_POST['pw']);
 
   if($user="" and $pw=""){
     echo "<script>alert('masukan')</script>";
     }
   else{
   $sql = "insert into tb_user(username, password) values('".$use."','".$pw."')";
   $hazil = mysqli_query($koneksi, $sql);
   echo "<script>alert('Create Account Succes');$('#1').val('');$('#2').val('');</script>";
   }
   
 }
 ?>
 <?php
session_start();
$ses=$_SESSION['username'];

 
if($ses){
header("Location: daftar.php");
session_destroy();
}
?>