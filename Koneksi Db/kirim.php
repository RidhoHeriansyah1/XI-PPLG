

<?php
session_start();
include "koneksi_db.php";
	$user_log = $_POST['log'];
	$pw_log = md5($_POST['pass']);
	$_SESSION['username'] = $user_log;


	$sql = "select * from tb_user where username='".$user_log."' and password='".$pw_log."'";
	$hasil = mysqli_query($koneksi, $sql);
		if(mysqli_num_rows($hasil)==1){
			header("location:transaksi.php");
		}
		else{
			echo "<script>alert('Username atau Password salah!'); window.location.href='daftar.php';</script>";
		}
	?>