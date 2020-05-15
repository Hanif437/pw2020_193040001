<?php
//mengecek apakah ada di id yan dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
// if(!isset($_GET['id'])){
//     header("location: ../index.php");
//     exit;
// }
require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$elektro = query("SELECT * FROM elektronik WHERE id = $id");
// var_dump ($elektronik);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <header id="header">
        <div class="inner">
            <a href="../index.php" class="logo"><strong>Putra Hanif Ammarta</strong></a>
            <nav id="nav">
                <a href="../index.php">Home</a>
                <a href="admin.php">Admin</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

    <section id="banner">
        <div class="inner">
            <header>
                <h1>Electronics Store</h1>
            </header>
            <div class="flex ">
                <section id="three" class="wrapper align-center">
                    <div class="inner">
                        <div class="align-center">
                            <article>
                                <header>
                                    <p>
                                        <?= $elektro['id']; ?>
                                    </p>
                                    <p>
                                        <img src="../assets/img/<?= $elektro['foto']; ?>">
                                    </p>
                                    <p>
                                        <?= $elektro['kode_barang']; ?>
                                    </p>
                                </header>
                                <footer>
                                    <p><?= $elektro['nama']; ?></p>
                                    <p><?= $elektro['jenis_barang']; ?></p>
                                    <p><?= $elektro['harga']; ?></p>
                                    <p><a href="../index.php" class="button special">Kembali</a></p>
                                </footer>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>