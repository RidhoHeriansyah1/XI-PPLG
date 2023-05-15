<?php
  $us = $_POST ['user'];
  $pw = $_POST ['pw'];
  $kp = $_POST ['kp'];
  $nl = $_POST ['nl'];
  $tl = $_POST ['tl'];
  $tgl = $_POST ['tgllahir'];
  $bln = $_POST ['blnlahir'];
  $thn = $_POST ['thnlahir'];
  $al = $_POST ['al'];
  
  ?>
  <?php
  if ($us =="user1"){
    echo "Username sudah digunakan ";
    }
   elseif($pw == $kp){
    header ('location: hasil.php');
   }
   elseif($pw <= $kp){
    echo "Password Tidak sama";
   }
   elseif($pw >= $kp){
    echo "Password Tidak sama";
   }
   else{
    header ('location: hasil.php');
   }
   ?>
   <body>
   <a href="daftar.php">back</a>
    daftar ulang
  </body>