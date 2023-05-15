<?php
include "koneksi_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Create</title>
</head>
<body>
  <div class="container p-5 my-5 border shadow rounded">
  <center><h2> Create Data Warga </h2>
  <div style=" border: 2px solid black; width:500px;"></div></center><br>
  <a href="delet.php"><button class="btn btn-outline-info">Edit / Delete</button> </a><br><br>
  
  <form action="" method="POST">
  <div class="form-row">
     <div class="col-sm-12 p-2">
        <label class="">NIK</label>
        <input type="text" class="form-control"  name="nik" minlength="16" maxlength="16" required>
</div>
      
<div class="col-sm-12 p-2">
        <label>Nama</label>
        <input type="text" class="form-control"  name="nama" required>
</div>

        <div class="col-sm-12 p-2">
        <label>Tempat Tanggal Lahir</label>
        </div>
        <div class="col-sm-6 p-2">
        <input type="text" class="form-control"  name="tmpt" required>
        </div>
        <div class="col-sm-6 p-2">
        <input type="date" class="form-control"  name="ttl" min="1880-01-01" max="2023-12-31" required>
        </div>

        <div class="col-sm-12 p-2">
        <label>Agama</label>
        <select name="agama" class="form-control"  id="" required>
          <option value="Islam">Islam</option>
          <option value="Protestan">Protestan</option>
          <option value="Katolik">Katolik</option>
          <option value="Buddha">Buddha</option>
          <option value="Hindu">Hindu</option>
          <option value="konghuchu">Konghuchu</option>
        </select>
        </div>
      
        <div class="col-sm-5 p-2">
        <label>Pekerjaan</label>
        <input type="text" class="form-control"  name="kerja" required>
        </div>

        <div class="col-sm-7 p-2">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"  required></textarea>
        </div>
        <div class="col-sm-4 p-2">
        <label>NO HP</label>
        <input type="number" class="form-control"  name="hp" required>
      </div>
        <div class="col-sm-8 p-2">
        <label>Email</label>
        <input type="email" class="form-control"  name="email" required>
</div>
<div class="col-sm-12">
    <br>
    <input type="submit" class="btn btn-outline-primary mb-2" value="Simpan Data"  name="save">
</div>
</div>
  </form>
  </div>
</body>
</html>
<?php

if(isset($_POST['save'])){
  $nik = $_POST['nik'];
  $nm = $_POST['nama'];
  $ttl = $_POST['ttl'];
  $temp = $_POST['tmpt'];
  $agm = $_POST['agama'];
  $kerja = $_POST['kerja'];
  $alamat = $_POST['alamat'];
  $hp = $_POST['hp'];
  $mail = $_POST['email'];
  $sl = mysqli_num_rows(mysqli_query($koneksi, "select * from data_warga where nik ='$nik'"));
  if($sl > 0){
    echo "<script>alert ('NIK Tidak Boleh Sama');</script>";
    
  }

  else{
  mysqli_query($koneksi,"INSERT into data_warga values('$nik', '$nm', '$alamat', '$kerja', '$temp / $ttl', '$agm', '$hp', '$mail')");
  echo "<script>alert ('Data Berhasil Disimpan'); </script>";
  echo "<script>window.location.assign('delet.php'); </script>";
  }
}
?>
