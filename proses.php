<?php 
  $nm = $_POST ['user'];
  $pw = $_POST ['pw'];
  ?>
  <?php
  if ($nm =="ridho" and $pw =="ridho123"){
   header ("location: hasil.html");
    }
   else{
    echo " Username atau Password salah silahkan klik";
   }
   ?>
   <body>
   <a href="login.php">back</a>
    untuk login ulang
  </body>