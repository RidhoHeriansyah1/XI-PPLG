<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
</head>
<body>
  <fieldset>
    <legend><h1>Daftar</h1></legend>
  <form action="prosdaf.php" method="POST">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="user" placeholder="Masukan Username"></td>

    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="pw" placeholder="Masukan Password"></td>
    </tr>
    <tr>
      <td>Konfirmasi Password</td>
      <td>:</td>
      <td><input type="password" name="kp" placeholder="Konfirmasi Password"></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nl" placeholder="Masukan Nama Lengkap"></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><input type="text" name="tl" style="text-transform: capitalize;"> <br>
          <select name="tgllahir">
            <option>Tgl</option>
            <?php 
            for ($tgl = 1; $tgl<=31; $tgl++){ ?>
            <option value="<?php echo $tgl ?>"><?php echo $tgl ?></option>
            <?php } ?>
          </select>
          <select name="blnlahir">
            <option>Bln</option>
            <?php
          for ($bln = 1; $bln <=12; $bln++) {?>
          <?php
          $nama_bulan = array("",'Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
          ?>
          <option value="<?php echo $nama_bulan [$bln] ?>"><?php echo $bln ?></option>
          <?php } ?>
          </select>
          <select name="thnlahir">
            <option>Thn</option>
           <?php 
            for ($thn = 1945; $thn<=2022; $thn++){ ?>
            <option value="<?php echo $thn ?>"><?php echo $thn ?></option>
            <?php } ?>
          </select>
        </td>
        </tr>

        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="al" placeholder="Masukan Alamat"></td>

    <tr>
      <td></td>
      <td></td>
      <td align="right"><input type="submit"></td>
    </tr>
    </table>
  </form>
  </fieldset>
</body>
</html>