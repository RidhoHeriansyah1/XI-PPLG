<?php 
include "koneksi_db.php";
if(isset($_POST['kd_barang'])){
	$code = $_POST['kd_barang'];
	
	$query = "select * from barang where kd_brg = ".$code;
	$hasil = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_array($hasil)){
	echo "Rp. ".$data['hrg_brg'];
	}
	
}
?>
<?php

if(isset($_POST['nota'])){
	$total_bayar = 0;
	$tanggal = $_POST['tanggal'];
	$nota = $_POST['nota'];
	$kode_barang = $_POST['kd_brg'];
	$jumlah = $_POST['jumlah'];
	
	$sql = "insert into transaksi(no_faktur, tanggal, kd_barang, beli) values(".$nota.",'".$tanggal."',".$kode_barang.",".$jumlah.")";
	$hazil = mysqli_query($koneksi, $sql);
	?>
	
	<center><h3><i>Transaksi Anda</i></h3></center>
	<table border='0' class='table' id="t">
        <tr>
            <th>No Nota</th>
            <th>Tanggal</th>
            <th>Nama barang</th>
            <th>Beli</th>
            <th>Harga satuan</th>
            <th>Total</th>
        </tr>
				<?php
	 $ambil = "select * from barang,transaksi where transaksi.no_faktur=".$nota." and barang.kd_brg = transaksi.kd_barang";
     $dat = mysqli_query($koneksi, $ambil);
	 while($tampil = mysqli_fetch_array($dat)){
		echo 
		 "<tr>
			<td>".$tampil['no_faktur']."</td>
			<td>".$tampil['tanggal']."</td>
			<td>".$tampil['nm_brg']."</td>
			<td>".$tampil['beli']."</td>
			<td>Rp.".$tampil['hrg_brg']."</td>
			<td>";
		$total_harga = $tampil['hrg_brg']*$tampil['beli'];
		echo "Rp.".$total_harga."</td></tr>";
		$total_bayar = $total_bayar + $total_harga;
			
	 }
	 echo 
	 "<tr>
		<th>Total bayar</th>
		<td colspan='5' style='text-align : center;'>Rp.".$total_bayar."</td>
	</tr>
	</table>";
		
	
	
}
?>