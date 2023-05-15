<!DOCTYPE html>
<html>
  <head>
    <title>Daftar</title>
    <script src="jquery-3.5.1.min.js"></script>
    <?php include "koneksi_db.php";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .frm{
        background-color:#9eb88e;;
        width: 30%;
        height: 300px;
        border-radius:10px;

      }
      .daf{
        background-color:#9eb88e;;
        width: 30%;
        height: 300px;
        border-radius:10px;
        margin-top:20px;

      }
      .daf input{ width: 80%;}
      button{margin-left:68%;}
      .daf form label{margin-right:62%;}
      #log{
        width: 80%;
      }
      #pass{
        width: 80%;
      }
      .frm form label{
        margin-right:62%;
      }
      .btn{
        margin-left:68%;
      }
    </style>
  </head>
  <body>
    <center>
  <div class="daf">
    <h1>Daftar</h1>
    <form method="post" id="daftar">
      <label>Username :</label>
      <input type="text" name="user" id="1" class="form-control"><br>
     <label> Password : </label>
     <input type="password" name="pw" id="2" class="form-control">
      <p id="error"></p>
    </form>
    <button id="tap" class="btn btn-primary">Daftar</button>
    </div>
    </center>
    <br><hr><br>


    <center>
    <div class="frm">
    <h1>Login</h1>
    <form method="post" id="login" onsubmit="ok()" action="kirim.php">
      <label>Username :</label> 
      <input type="text" name="log" class="form-control" id="log"><br>
      <label>Password :</label> 
      <input type="password" name="pass" class="form-control" id="pass">
      <p style="color:red;" id="eror" name="salah"></p>
      <input type="submit" name="submit" value="Login" class="btn btn-primary">
    </form>
    </div>
    </center>

    <script>
  $("#tap").click(function() {
    //variabel dari nilai barang
    var usremen  = document.getElementById("1").value.length;
    var presdew = document.getElementById("2").value.length;
    if(usremen <5 || presdew <5) {
      alert("Minimal Username dan Password Adalah 5");
      return;
    }
    else {
    var kir = $("#daftar").serialize();
      $.ajax({
        type: "POST",
        dataType: "html",
        url: "logout.php",
        data: kir,
        success: function(data) {
          $("#error").html(data);
          
        }
      });
    }});

    </script>
    <script>
    function ok(){
      var user=document.login.log.value;
      var pass=document.login.pass.value;

      if(user.length=="" && pass.length==""){
        alert("Isi Username dan Password");
        return true;

      }
      elseif(user.length==""){
        alert("Isi Username");
        return true;
      }
      elseif(pass.length==""){
        alert("Isi Password");
        return true;
      }
    }
    </script>
  </body>
</html>