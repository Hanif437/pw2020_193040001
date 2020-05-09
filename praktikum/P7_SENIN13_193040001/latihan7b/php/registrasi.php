<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST)) {
    echo "<script>
              alert ('Registrasi Berhasil!');
              document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
        alert ('Registrasi Gagal!');
        </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <style>
    .container {
      border: 2px solid seagreen;
      margin: auto;
      border-radius: 20px;
      width: 260px;
      text-align: center;
      padding-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
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
          <td><input type="password" name="password" placeholder="Masukkan 1-10 digit" required></td>
        </tr>
      </table>
      <button type="submit" name="registrasi">Register</button>
    </form>
  </div>
</body>

</html>