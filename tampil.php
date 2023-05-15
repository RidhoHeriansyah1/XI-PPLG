<?php
$var1 = $_GET ['nama'];
$var2 = $_GET ['alamat'];
$var3 = $_GET ['tempatlahir'];
$var4 = $_GET ['tanggallahir'];
$var5 = $_GET ['bulanlahir'];
$var6 = $_GET ['tahunlahir'];
$var7 = $_GET ['jeniskelamin'];
$var8 = $_GET ['h'];
?>

<html>
<head>
</head>
<body>
  <table>
    <tr>
<td>Nama</td> 
<td>:</td> 
<td style="text-transform:capitalize;"><?php echo $var1; ?></td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td> 
<td style="text-transform:capitalize;"><?php echo $var2; ?> </td>
</tr>

<tr>
<td>Tempat/Tanggal Lahir</td> 
<td>:</td>
<td style="text-transform:capitalize;"> <?php echo $var3; ?>, 
<?php echo $var4; ?> 
<?php echo $var5; ?> 
<?php ?>
<?php echo $var6; ?> </td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td> <?php echo $var7; ?> </td>
</tr>

<tr>
<td>No HP</td> 
<td>: </td>
<td> <?php echo $var8; ?> </td>
</tr>
</table>
</body>
</html>
