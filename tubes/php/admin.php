<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

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
        <a href="php/admin.php">Admin</a>
        <a href="tambah.php">Tambah Data</a>
        <a href="logout.php">Logout</a>
        <form method="post" action="#">
          <div class="row uniform">
            <div class="10u 12u$(small)">
              <input type="text" name="keyword" id="query" value="" class="keyword" placeholder="Masukkan nama barang" />
            </div>
            <div class="2u$ 12u$(small)">
              <input type="submit" value="Cari" name="cari" class="fit tombol-cari" />
            </div>
          </div>
        </form>
      </nav>
      <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
  </header>

  <section id="banner">
    <div class="inner">
      <header>
        <h1>Electronics Store</h1>
      </header>
      <div class="flex">
        <footer>
          <div class="table-wrapper">
            <div class="12u 12u$">
              <table>
                <?php if (empty($elektronik)) : ?>
                  <tr>
                    <td>
                      <p><i><b>Barang Elektronik Tidak Ditemukan!</b></i></p>
                    </td>
                  </tr>
                <?php endif; ?>

                <?php $i = 1 ?>
                <?php foreach ($elektronik as $elektro) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $elektro['kode_barang']; ?></td>
                    <td><img src="../assets/img/<?= $elektro['foto']; ?>" alt=""></td>
                    <td><?= $elektro['nama']; ?></td>
                    <td><?= $elektro['jenis_barang']; ?></td>
                    <td><?= $elektro['harga']; ?></td>
                    <td>
                      <a href="ubah.php?id=<?= $elektro['id']; ?>"><button class="ubah">Ubah</button></a>
                      <a href="hapus.php?id=<?= $elektro['id']; ?>"><button class="hapus" onclick="return confirm('Hapus Data ?')">Hapus</button></a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
                <tr>
                  <td>
                    <button class="kembali">
                      <a href="../index.php">Kembali</a>
                    </button>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </footer>
      </div>
  </section>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/skel.min.js"></script>
  <script src="../assets/js/util.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>