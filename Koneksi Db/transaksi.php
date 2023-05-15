<?php
error_reporting(0);
session_start();
$ses=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Shop</title>
  <?php
  date_default_timezone_set("Asia/Jakarta");
  $tgl = date('l jS \of F Y H:i:s A ');
  $nota = random_int(0, 1000);
  include 'koneksi_db.php';
  $queri = 'select * from barang';
  $klik = mysqli_query($koneksi, $queri);
  ?>
  <style>
    body{
      background:	#c4c1ac ;
    }
    .s{
      background:#9eb88e;
      padding:15px;
      border-radius:10px;
      width:500px;
      margin-top:10%;
    }
  #t {
    text-align: center;
  }
  #btn{
    text-align:center;
    margin-top:10px;
    margin-right:10px;
  }
  .log{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    background-color:#9eb88e;
  }
  .l{
    margin-left:10px;
    color:white;
    text-transform:capitalize;
    margin-top:10px;
  }
  </style>
</head>

<body>
  <div class="bg">
  <center>
    <div class="log">
    <i><h3 class="l">Selamat Datang <?php echo $ses;?></h3></i>
    <p><a href="logout.php" class="btn btn-primary" id="btn">Logout</a></p>
</div>
    <br>
  <div class="s">

  <form method="post" id="frm">
    <table style="margin : 10px;">
      <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><?php echo $tgl; ?>
          <input type="hidden" value="<?php echo $tgl; ?>" name="tanggal">
        </td>
      </tr>

      <tr>
        <td>No Nota</td>
        <td>:</td>
        <td><?php echo $nota; ?>
          <input type="hidden" value="<?php echo $nota; ?>" name="nota">
        </td>
      </tr>

      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><select name="kd_brg" id="bar" class="form-control">
            <option value="a">Pilih barang</option>
            <?php
        $hasim = mysqli_query($koneksi, $queri);
        while ($datar = mysqli_fetch_array($hasim)) { ?>
            <option value="<?php echo $datar['kd_brg'] ?>"><?php echo $datar['nm_brg'] ?></option>;
            <?php } ?>

          </select></td>
      </tr>

      <tr>
        <td>Harga</td>
        <td>:</td>
        <td>
          <div id="hrg">Harga akan tampil disini</div>
        </td>
      </tr>

      <tr>
        <td>Jumlah beli
        <td>:</td>
        <td><input type="number" name="jumlah" min="1" id="jumlah" class="form-control"></td>
      </tr>
    </table>
  </form>
  <button id="klik" class="btn btn-primary" style="margin-left:77%;">Beli</button>
  </div>
        </center>
        <br><br>
  <div id="ambil"></div>

  <script>
  $("#bar").change(function() {
    //variabel dari nilai barang
    var kd_bar = $("#bar").val();
    if (kd_bar == "a") {
      $('#hrg').text("Mohon masukan barang!!");
    } else {
      $.ajax({
        type: "POST",
        dataType: "html",
        url: "ambil-harga.php",
        data: "kd_barang=" + kd_bar,
        success: function(data) {
          $("#hrg").html(data);
        }
      });
    }
  });



  $("#klik").click(function() {
    var kd_bar = $("#hrg").html();
    var jumb = $("#jumlah").val();
    if (kd_bar.match("Harga akan tampil disini") || jumb == 0) {
      alert("Mohon masukan nilai yang valid!!");
    } else {
      //variabel dari form
      var semua_isi_form = $("#frm").serialize();

      //bismillah, semoga lancar ngodingnya, latom`
      $.ajax({
        type: "POST",
        dataType: "html",
        url: "ambil-harga.php",
        data: semua_isi_form,
        success: function(data) {
          $("#ambil").html(data);

        }
      });
    }
  });

  //Yeay!! error ya? wkwkwk
  </script>
</body>

</html>