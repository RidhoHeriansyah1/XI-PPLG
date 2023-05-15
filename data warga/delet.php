<?php
include "koneksi_db.php";
?>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  
  <title>Update</title>
</head>

<div class="my-3">
<center><h2>Tabel Data Warga </h2>
<div style=" border: 2px solid black; width:1000px;"></div> </center>
</div>
<div class="container-fluid">

                                                            <!--Tambah Data Warga  -->
                                                            
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal">
    Create
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Warga</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="" method="POST">
  <div class="form-row">
     <div class="col-sm-12">
        <label class="">NIK</label>
        <input type="teks" class="form-control" name="nik" minlength="16" maxlength="16" required>
</div>
      
<div class="col-sm-12">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required>
</div>

        <div class="col-sm-12">
        <label>Tempat Tanggal Lahir</label>
        </div>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="tmpt" required>
        </div>
        <div class="col-sm-6">
        <input type="date" class="form-control"  name="ttl" min="1880-01-01" max="2023-12-31" required>
        </div>

        <div class="col-sm-12">
        <label>Agama</label>
        <select name="agama" class="form-control"  id="" required>
          <option value=""> </option>
          <option value="Islam">Islam</option>
          <option value="Protestan">Protestan</option>
          <option value="Katolik">Katolik</option>
          <option value="Buddha">Buddha</option>
          <option value="Hindu">Hindu</option>
          <option value="konghuchu">Konghuchu</option>
        </select>
        </div>
      
        <div class="col-sm-6">
        <label>Pekerjaan</label>
        <input type="text" class="form-control"  name="kerja" required>
        </div>

        <div class="col-sm-6">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="col-sm-6">
        <label>NO HP</label>
        <input type="number" class="form-control" name="hp" required>
      </div>
        <div class="col-sm-6">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required>
</div>
<div class="col-sm-12">
    <br>
    
</div>
</div>
  
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Simpan Data"  name="save">
        
        </div>
        
      </div>
    </div>
  </div>
  </form>
                                                                <!--Tambah Selesai  -->

  <br><br>
                                                                <!-- Read Database  -->

<table class="table table-bordered table-hover">
  <thead class="thead-dark">
  <tr>
    <th>No</th>
    <th >NIK</th>
    <th >Nama</th>
    <th>Tempat Tanggal Lahir</th>
    <th>Agama</th>
    <th >Pekerjaan</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <?php
$sq = mysqli_query ($koneksi, "SELECT * FROM data_warga");
$no = 1;
while ($all = mysqli_fetch_array($sq)){
  
?>
<form action="" method="GET"></form>
<tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $all['nik']; ?></td>
    <td><?php echo $all['nama']; ?></td>
    <td><?php echo $all['ttl']; ?></td>
    <td><?php echo $all['agama']; ?></td>
    <td><?php echo $all['pekerjaan']; ?></td>
    <td><?php echo $all['alamat']; ?></td>
    <td><?php echo $all['no_hp']; ?></td>
    <td><?php echo $all['email']; ?></td>
    <td>
    <?php echo "<a href='?edit=$all[nik]'>"?>
    <input type="button" class="btn btn-outline-warning p-2" value="Edit"></a></td>
    </td>
    <td>
    <?php echo "<a href='?hapus=$all[nik]' onClick=\"return confirm('HAPUS DATA INI?');\">"?>
    <input type="button" class="btn btn-outline-danger p-2" value="Hapus"></a>
    
  </tr>
  </tbody>
</form>
<?php $no++;
 } ?>
<table>
<br></div>
                                                          <!--Read Database Selesai  -->


                                                          <!-- Query Tambah Data -->
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
  
  ?>
  <script>
    swal({
      title : "Berhasil",
      text : "Data Berhasil Ditambahkan",
      icon : "success"
    })
.then((value) => {
  window.location.replace('delet.php');
  
});

  </script>
  <?php
  }
}
?>
                                                          <!--Query Tambah Data Selesai  -->

                                                          

                                                          <!-- Query Hapus -->
<?php
if(isset($_GET['hapus'])){
    mysqli_query($koneksi, "DELETE from data_warga where nik='$_GET[hapus]'");
    echo "<script>alert ('Data Berhasil Dihapus'); </script>";
    echo "<script>window.location.replace('delet.php'); </script>";
}

                                                          //Query Hapus Selesai
                                                          
                                                          
                                                          
                                                          // Query Pencet Edit Muncul
elseif(isset($_GET['edit'])){
  $sq = mysqli_query($koneksi, "SELECT * from data_warga where nik='$_GET[edit]'");
  while($all = mysqli_fetch_array($sq)){ 
    $all['ttl'] = explode(" ", $all['ttl']);?>
<center><h2>Edit Data Warga</h2>
  <div style=" border: 2px solid black; width:1000px;"></div></center> <br>

<div class="container pt-5 my-4 border rounded shadow">
  <form action='' method="POST">
  <div class="form-row">
 
        
        <input type='hidden' class="form-control" maxlength='16' minlength='16' name='ni' value=<?php echo $all['nik'];?> required>


  <div class="col-sm-12 p-2">
        <label>NIK</label>
        
        <input type='text' class="form-control" maxlength='16' minlength='16' name='nik' value=<?php echo $all['nik'];?> required>
  </div>
    

        <div class="col-sm-12 p-2">    
        <label>Nama</label>
        
        <input type="text" class="form-control" name="nama" value="<?php echo $all['nama'];?>">
        </div>

        <div class="col-sm-12 p-2">
       <label>Tempat Tanggal Lahir</label>
       </div>
        <div class="col-sm-6 p-2">
        <input type="text" class="form-control" name="tmpt" value="<?= $all['ttl'][0];?>">
        </div>
        <div class="col-sm-6 p-2">
        <input type="date" class="form-control" name="ttl" value="<?= $all['ttl'][2];?>">
        </div>
      
        <div class="col-sm-12 p-2">
        <label>Agama</label>

        <select name="agm" class="form-control">
          <option <?php echo ($all['agama'] == 'Islam') ? "selected": "" ?>>Islam</option>
          <option <?php echo ($all['agama'] == 'Protestan') ? "selected": "" ?>>Protestan</option>
          <option <?php echo ($all['agama'] == 'Katolik') ? "selected": "" ?>>Katolik</option>
          <option <?php echo ($all['agama'] == 'Buddha') ? "selected": "" ?>>Buddha</option>
          <option <?php echo ($all['agama'] == 'Hindu') ? "selected": "" ?>>Hindu</option>
          <option <?php echo ($all['agama'] == 'Konghuchu') ? "selected": "" ?>>Konghuchu</option>
        </select>
  </div>
      
        <div class="col-sm-6 p-2">
        <label>Pekerjaan</label>
        
        <input type="text" class="form-control" name="kerja" value="<?php echo $all['pekerjaan'];?>">
        </div>

        <div class="col-sm-6 p-2">
        <label>Alamat</label>
        
        <textarea class="form-control" name="alamat"><?php echo $all['alamat'];?></textarea>
        </div>
        <div class="col-sm-6 p-2">
        <label>NO HP</label>
        
        <input type="number" class="form-control" name="hp" value="<?php echo $all['no_hp'];?>">
        </div>

        <div class="col-sm-6 p-2">
        <label>Email</label>
        <input type="email" class="form-control" name="mail" value="<?php echo $all['email'];?>">

        </div>
        <div class="col-sm-12 p-2">
    <br>
    <button class="btn btn-outline-primary mb-2" name="ok">Update</button>
</div>
  </div>
  </form>
</div>

                                                                  <!--Query Pencet Edit Muncul Selesai  -->


                                                                  

                                                                  <!-- Query Ngirim Edit -->
  <?php
   } 
}
if(isset($_POST['ok'])){
  $n = $_POST['ni'];
  $nik = $_POST['nik'];
  $na = $_POST['nama'];
  $a = $_POST['alamat'];
  $pe = $_POST['kerja'];
  $tm = $_POST['tmpt'];
  $tgl =$_POST['ttl'];
  $ag = $_POST['agm'];
  $no = $_POST['hp'];
  $e = $_POST['mail'];

  
  $sl = mysqli_num_rows(mysqli_query($koneksi, "select * from data_warga where nik ='$nik'"));
    if($sl > 0){
       echo "<script>alert ('gagal');</script>";
      
    }
    else{
  mysqli_query($koneksi, "UPDATE data_warga SET nik='$nik', nama='$na', alamat='$a', pekerjaan='$pe', ttl='$tm / $tgl', agama='$ag', no_hp='$no', email='$e' where nik='$n'");
  echo "<script>alert ('Data Berhasil Disimpan') </script>";
  echo "<script>window.location.replace('delet.php'); </script>";
    }
}
?>

                                                              <!-- Query Ngirim Edit Selesai -->
<SCRIPT LANGUAGE="JavaScript">
history.forward()
</SCRIPT>
<script>
  function reset(type = true, nik = 0)
</script>
