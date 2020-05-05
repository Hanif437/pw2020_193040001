<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';

//cek apakah tombol tambah sudah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data Gagal Ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" autofocus required></td>
      </tr>
      <tr>
        <td>NRP</td>
        <td>:</td>
        <td><input type="text" name="nrp" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" required></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><input type="text" name="jurusan"></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="text" name="gambar"></td>
      </tr>
      <tr>
        <td><button type="submit" name="tambah">Tambah Data!</button></td>
      </tr>
      <tr>
        <td><button><a href="index.php">Kembali</a></button></td>
      </tr>
    </table>
  </form>
</body>

</html>