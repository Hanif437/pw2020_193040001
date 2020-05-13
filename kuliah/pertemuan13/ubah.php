<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';

// //jika tidak ada id dari url
// if (!isset($_GET['id'])) {
//   header("Location: index.php");
//   exit;
// }

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");



//cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data Gagal Diubah!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td><input type="hidden" name="id" value="<?= $m['id']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?= $m['nama']; ?>" autofocus required></td>
      </tr>
      <tr>
        <td>NRP</td>
        <td>:</td>
        <td><input type="text" name="nrp" value="<?= $m['nrp']; ?>" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" value="<?= $m['email']; ?>" required></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><input type="text" name="jurusan" value="<?= $m['jurusan']; ?>" required></td>
      </tr>
      <tr>
        <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar" class="gambar" onchange="previewImage()"></td>
        <p><img src="img/<?= $m['gambar']; ?>" width="120" style="display: inline-block" class="img-preview"></p>
      </tr>
      <tr>
        <td><button type="submit" name="ubah">Ubah Data</button></td>
      </tr>
      <tr>
        <td><button><a href="index.php">Kembali</a></button></td>
      </tr>
    </table>
  </form>

  <script src="js/script.js"></script>
</body>

</html>