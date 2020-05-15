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
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <!-- Header -->
  <header id="header">
    <div class="inner">
      <a href="../index.php" class="logo"><strong>Putra Hanif Ammarta</strong></a>
      <nav id="nav">
        <a href="../index.php">Home</a>

      </nav>
      <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
  </header>


  <section id="banner">
    <div class="inner">
      <header>
        <h1>Login</h1>
      </header>
      <?php if (isset($error)) : ?>
        <p style="color: white; font-style: italic;"><?= $error; ?>Username atau Password Salah!</p>
      <?php endif; ?>
      <div class="flex">
        <form action="" method="POST">
          <table>
            <div class="4u 12u$(small)">
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
            </div>
          </table>
          <div class="remember">
            <input type="checkbox" name="remember">
            <label for="remember">Remember Me</label>
          </div>
          <button type="submit" name="submit">Login</button>
          <p>Belum punya akun ? Daftar Disini ! <a href="registrasi.php">Disini</a></p>
        </form>
      </div>
    </div>
  </section>




  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/skel.min.js"></script>
  <script src="../assets/js/util.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>