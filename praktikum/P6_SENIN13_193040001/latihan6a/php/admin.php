<?php
require 'functions.php';

$elektronik = query("SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <style>
    table {
      margin: auto;
      background-color: seagreen;
      font-family: arial;
    }

    img {
      border-radius: 20px;
    }

    .ubah {
      background-color: black;
      color: white;
      border-radius: 10px;
    }

    .hapus {
      background-color: maroon;
      color: white;
      border-radius: 10px;
    }

    .kembali {
      background-color: maroon;
      color: white;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <h1>
    <center><b>ADMIN</b></center>
  </h1>
  <table border="1" cellpadding="12" cellspacing="0">
    <tr>
      <th>NO</th>
      <th>OPSI</th>
      <th>KODE BARANG</th>
      <th>GAMBAR</th>
      <th>NAMA</th>
      <th>TIPE</th>
      <th>HARGA</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($elektronik as $elektro) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button class="ubah">Ubah</button></a>
          <a href=""><button class="hapus">Hapus</button></a>
        </td>
        <td><?= $elektro['kode_barang']; ?></td>
        <td><img src="../assets/img/<?= $elektro['foto']; ?>" alt=""></td>
        <td><?= $elektro['nama']; ?></td>
        <td><?= $elektro['jenis_barang']; ?></td>
        <td><?= $elektro['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <tr>
      <td>
        <button class="kembali">
          <center><a href="../index.php">Kembali</a></center>
        </button>
      </td>
    </tr>
  </table>

</body>

</html>