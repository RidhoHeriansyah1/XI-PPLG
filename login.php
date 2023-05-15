<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <fieldset>
    <legend><h1>Login</h1></legend>
  <form action="proses.php" method="POST">
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
      <td></td>
      <td></td>
      <td align="right"><input type="submit"></td>
    </tr>
    </table>
  </form>
  </fieldset>
</body>
</html>