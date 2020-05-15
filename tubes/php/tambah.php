<?php

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = admin.php;
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Ditambahkan!');
          document.location.href = admin.php;
          </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electronics Store</title>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <!-- Header -->
  <header id="header">
    <div class="inner">
      <a href="../index.php" class="logo"><strong>Putra Hanif Ammarta</strong></a>
      <nav id="nav">
        <a href="../index.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="logout.php">Logout</a>
      </nav>
      <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
  </header>

  <section id="banner">
    <div class="inner">
      <header>
        <h1>Tambah Data</h1>
      </header>

      <div class="flex">
        <form action="" method="POST" enctype="multipart/form-data">
          <table>
            <div class="4u 12u$(small)">
              <tr>
                <td>
                  <label>Kode Barang</label>
                </td>
                <td>:</td>
                <td><input type="text" name="kode_barang" id="kode_barang" autofocus autocomplete="off" required></td>
              </tr>
              <tr>
                <td>
                  <label>Gambar</label>
                </td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto" class="foto" onchange="previewImage()"></td>
                <p><img src="../assets/img/banner.jpg" width="120" style="display: inline-block" class="img-preview"></p>
              </tr>
              <tr>
                <td>
                  <label>Nama Barang</label>
                </td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
              </tr>
              <tr>
                <td>
                  <label>Jenis Barang</label>
                </td>
                <td>:</td>
                <td>
                  <select name="jenis_barang" id="jenis_barang" required>
                    <option value="">---------------Pilih Jenis Barang-------------</option>
                    <option value="Smartphone">Smartphone</option>
                    <option value="Headset">Headset</option>
                    <option value="Printer">Printer</option>
                    <option value="Aksesoris Game">Aksesoris Game</option>
                    <option value="Konsol Game">Konsol Game</option>
                    <option value="Dan Lain Lain">Dan Lain Lain</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Harga Barang</label>
                </td>
                <td>:</td>
                <td><input type="text" name="harga" id="harga" required></td>
              </tr>
            </div>
          </table>
          <button type="submit" name="tambah">Tambah Data</button>
          <br>
          <br>
          <a href="admin.php"><button class="button">Kembali</button></a>
        </form>
      </div>
    </div>
  </section>

  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/skel.min.js"></script>
  <script src="../assets/js/util.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>