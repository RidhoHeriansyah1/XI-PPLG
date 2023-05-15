<?php
$var1 = $_GET ['rek'];
$var2 = $_GET ['bank'];
$var3 = $_GET ['nopengirim'];
$penerima = $_GET ['nopenerima'];
$var4 = $_GET ['nom'];
$var5 = $_GET ['ket'];
?>
<body>
  <h1>Transaksi Berhasil</h1>
  <table>
    <tr>
  <td>Rekening</td>
  <td>:</td> 
  <td><?php echo $var1; ?></td>
  </tr>
  <tr>
  <td>Bank</td> 
  <td>:</td> 
  <td><?php echo $var2; ?></td>
  </tr>
  <tr>
  <td>No Rek Pengirim </td>
  <td>:</td>
  <td><?php echo $var3; ?></td>
  </tr>
  <tr>
  <td>No Rek Penerima</td>
  <td>:</td> 
  <td><?php echo $penerima; ?></td>
  </tr>
  <tr>
  <td>Nominal</td>
  <td>:</td>
  <td>Rp.<?php echo $var4; ?></td>
  </tr>
  <td>Keterangan</td>
  <td>:</td>
  <td><?php echo $var5; ?></td>
  </tr>
  </table>
</body>