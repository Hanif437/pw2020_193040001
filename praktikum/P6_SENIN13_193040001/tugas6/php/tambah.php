<?php
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
  <title>Form Tambah Data Barang Elektronik</title>
</head>

<body>
  <h3>
    <center>Form Tambah Data Barang Elektronik</center>
  </h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="kode_barang">Kode Barang :</label>
        <input type="text" name="kode_barang" id="kode_barang" required autofocus><br><br>
      </li>
      <li>
        <label for="foto">Gambar :</label>
        <input type="text" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="nama">Nama Barang :</label>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="jenis_barang">Tipe Barang :</label>
        <select name="jenis_barang" id="jenis_barang" required>
          <option value="">----------Pilih Tipe Barang----------</option>
          <option value="smartphone">Smarphone</option>
          <option value="headset">Headset</option>
          <option value="printer">Printer</option>
          <option value="aksesoris game">Aksesoris Game</option>
          <option value="konsol game">Konsol Game</option>
        </select>
      </li><br>
      <li>
        <label for="harga">Harga Barang : Rp.</label>
        <input type="text" name="harga" id="harga" required><br><br>
      </li><br> <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit" class="submit">
        <a href="../index.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>