<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
<body>
    <form method="GET" action="tampil.php">
      <table>
        <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" style="text-transform: capitalize;"></td>
        </tr>
  
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" style="text-transform: capitalize;"></td>
        </tr>
  
        <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><input type="text" name="tempatlahir" style="text-transform: capitalize;"> <br>
          <select name="tanggallahir">
            <option>Tgl</option>
            <?php 
            for ($tgl = 1; $tgl<=31; $tgl++){ ?>
            <option value="<?php echo $tgl ?>"><?php echo $tgl ?></option>
            <?php } ?>
          </select>
          <select name="bulanlahir">
            <option>Bln</option>
            <?php
          for ($bln = 1; $bln <=12; $bln++) {?>
          <?php
          $nama_bulan = array("",'Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
          ?>
          <option value="<?php echo $nama_bulan [$bln] ?>"><?php echo $bln ?></option>
          <?php } ?>
          </select>
          <select name="tahunlahir">
            <option>Thn</option>
           <?php 
            for ($thn = 1945; $thn<=2022; $thn++){ ?>
            <option value="<?php echo $thn ?>"><?php echo $thn ?></option>
            <?php } ?>
          </select>
        </td>
        </tr>
  
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <input type="radio" name="jeniskelamin" value="Laki-laki" >L /
            <input type="radio" name="jeniskelamin" Value="Perempuan">P
          </td>
        </tr>
        <tr>
          <td>Nomor HP</td>
          <td>:</td>
          <td><input type="text" name="h"></td>
          </tr>
  
        <tr>
        <td colspan="3" align="right"><input type="submit" value="Kirim"></td>
        </tr>
      </table>
      
    </form>
  </body>
  </html>