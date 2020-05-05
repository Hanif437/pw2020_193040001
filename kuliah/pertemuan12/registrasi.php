<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST)) {
    echo "<script>
              alert ('User sudah ditambahkan ! Silahkan login terlebih dahulu!');
              document.location.href = 'login.php';
          </script>";
    return false;
  } else {
    echo 'User gagal Ditambahkan!';
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Registrasi</h3>
  <form action="" method="POST">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="Masukkan 1-10 digit" autofocus autocomplete="off" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password1" placeholder="Masukkan 1-10 digit" required></td>
      </tr>
      <tr>
        <td>Konfirmasi Password</td>
        <td>:</td>
        <td><input type="password" name="password2" placeholder="Masukkan 1-10 digit" required></td>
      </tr>
      <tr>
        <td><button type="submit" name="registrasi">Register</button></td>
      </tr>
    </table>
  </form>
</body>

</html>