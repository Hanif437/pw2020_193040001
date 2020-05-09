<?php
session_start();
require 'functions.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}


if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row  = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: login.php");
    die;
  }
  $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
    <h3>Login</h3>
    <?php if (isset($login['error'])) : ?>
      <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
      <table>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" placeholder="Masukkan Username" autofocus autocomplete="off" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" placeholder="Masukkan Password" required></td>
        </tr>
      </table>
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember Me</label>
      </div>
      <button type="submit" name="submit">Login</button>
      <p>Belum punya akun ? Daftar Disini ! <a href="registrasi.php">Disini</a></p>
    </form>
  </div>
</body>

</html>