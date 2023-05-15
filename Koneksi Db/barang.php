<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  <table align="center" class="table table-striped">
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Harga Barang</th>
      <th>Kategori Barang</th>
    </tr>
    <?php

include 'koneksi_db.php';

$queri="select * from barang, kat_brg where kd_kate=kd_kat";
$hasil=mysqli_query($koneksi, $queri);
while ($data =mysqli_fetch_array($hasil)){
  echo "<tr><td>". $data['kd_brg'].
       "</td><td>". $data['nm_brg'].
       "</td><td> Rp.".$data['hrg_brg'].
       "</td><td>". $data['nm_kat'] . "</td></tr>";
}

?>
  </table>
</body>