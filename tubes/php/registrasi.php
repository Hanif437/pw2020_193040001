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
        <h1>Registrasi</h1>
      </header>
      <div class="flex">
        <form action="" method="POST">
          <table>
            <div class="4u 12u$(small)">
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
            </div>
          </table>
          <button type="submit" name="registrasi">Register</button>
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