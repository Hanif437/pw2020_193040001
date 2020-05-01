<?php
require 'functions.php';

$elektronik = query("SELECT * FROM elektronik");

if (isset($_POST['cari'])) {
  $elektronik = cari($_POST['keyword']);
}
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
  <div class="add">
    <button><a href="tambah.php">Tambah Data</a></button>
  </div>
  <form action="" method="POST">
    <input type="text" name="keyword" size="50" placeholder="Masukkan Keyword Di Pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">
      Cari!
    </button>
  </form>
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

    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="6">
          <p><i><b>Barang Elektronik Tidak Ditemukan!</b></i></p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1 ?>
    <?php foreach ($elektronik as $elektro) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $elektro['id']; ?>"><button class="ubah">Ubah</button></a>
          <a href="hapus.php?id=<?= $elektro['id']; ?>"><button class="hapus" onclick="return confirm('Hapus Data ?')">Hapus</button></a>
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