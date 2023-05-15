<body>
  <table align="center" style="border:2px solid black;">
    <?php
include 'koneksi_db.php';
$query= 'select * from kat_brg';
$hasil=mysqli_query($koneksi, $query);
while ($data =mysqli_fetch_array($hasil)){
  $queri ="select * from barang where kd_kate = '". $data['kd_kat']."'";
  $hasils = mysqli_query($koneksi, $queri);
  echo "<table border=1><tr><th colspan=4>".$data['nm_kat']."</th></tr><tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga Barang</th><th>Kode Kategori</th></tr>";

  while($da = mysqli_fetch_array($hasils)){
    echo "<tr><td>".$da['kd_brg']."</td><td>".$da['nm_brg']."</td><td>Rp. ". $da['hrg_brg']."</td><td>".$da['kd_kate']."</td></tr>";
  }
  echo "</table>";
}
?>
  </table>
</body>