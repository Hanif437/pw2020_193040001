<?php
require 'functions.php';

$id = $_GET['id'];
$elektro = query("SELECT * FROM elektronik WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Diubah!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Diubah!');
          document.location.href = 'admin.php';
          </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah Data Barang Elektronik</title>
</head>

<body>
  <h3>
    <center>Form Ubah Data Barang Elektronik</center>
  </h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $elektro['id']; ?>">
    <ul>
      <li>
        <label for="kode_barang">Kode Barang :</label>
        <input type="text" name="kode_barang" id="kode_barang" required value="<?= $elektro['kode_barang']; ?>" autofocus><br><br>
      </li>
      <li>
        <label for="foto">Gambar :</label>
        <input type="text" name="foto" id="foto" required value="<?= $elektro['foto']; ?>"><br><br>
      </li>
      <li>
        <label for="nama">Nama Barang :</label>
        <input type="text" name="nama" id="nama" required value="<?= $elektro['nama']; ?>"><br><br>
      </li>
      <li>
        <label for="jenis_barang">Tipe Barang :</label>
        <select name="jenis_barang" id="jenis_barang" required value="<?= $elektro['jenis_barang']; ?>">
          <option value="<?= $elektro['jenis_barang']; ?>">----------Pilih Tipe Barang----------</option>
          <option value="smartphone">Smartphone</option>
          <option value="headset">Headset</option>
          <option value="printer">Printer</option>
          <option value="aksesoris game">Aksesoris Game</option>
          <option value="konsol game">Konsol Game</option>
        </select>
      </li><br>
      <li>
        <label for="harga">Harga Barang : </label>
        <input type="text" name="harga" id="harga" required value="<?= $elektro['harga']; ?>"><br><br>
      </li><br> <br>
      <button type="submit" name="Ubah">Ubah Data!</button>
      <button type="submit" class="submit">
        <a href="../index.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>