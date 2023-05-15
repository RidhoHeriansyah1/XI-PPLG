<head>
</head>

<body bgcolor="lightslategray">
  <center>
    <form action="tampiling.php" method="get">
      <select name="pilih">
        <option value="">Semua</option>
        <option value=" where kd_kate= 'AE01' ">Makanan</option>
        <option value=" where kd_kate= 'AE02' ">Minuman</option>
        <option value=" where kd_kate= 'AE03' ">Alat Rumah Tangga</option>
        <option value=" where kd_kate= 'AE04' ">Bumbu Dapur
        <option value=" where kd_kate= 'AE05' ">Alat Elektronik</option>
      </select>
      <input type="submit" value="Tampilkan">
    </form>
  </center>
  <table align="center" style="border:2px solid black;">
    <tr>
      <th bgcolor="lightblue">Kode Barang</th>
      <th bgcolor="lightblue">Kode Kategori</th>
      <th bgcolor="lightblue">Nama Barang</th>
      <th bgcolor="lightblue">Harga Barang</th>
    </tr>
    <section style="display:none;">
      <?php
  $kategori =$_GET['pilih'];
  ?>
    </section>
    <?php

include 'koneksi_db.php';

$queri="select * from barang".$kategori;
$hasil=mysqli_query($koneksi, $queri);
while ($data =mysqli_fetch_array($hasil)){
  echo "<tr bgcolor=lightblue><td>". $data['kd_brg']."</td><td>" . $data['kd_kate']. "</td><td>". $data['nm_brg']. "</td><td> Rp.". $data['hrg_brg'] . "</td></tr>";
}

?>
  </table>
</body>