<?php
require 'php/functions.php';
$elektronik = query("SELECT * FROM elektronik");
// var_dump($elektronik);
// foreach($elektronik as $elektro){
// echo $elektro['nama'];
// }

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
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="../index.php" class="logo"><strong>Putra Hanif Ammarta</strong></a>
            <nav id="nav">
                <a href="../index.php">Home</a>
                <a href="php/admin.php">Admin</a>
                <form method="post" action="#">
                    <div class="row uniform">
                        <div class="9u 12u$(small)">
                            <div class="keyword">
                                <input type="text" name="keyword" id="query" value="" class="keyword" placeholder="Masukkan nama barang" required autocomplete="off" />
                            </div>
                        </div>
                        <div class="3u$ 12u$(small)">
                            <input type="submit" value="Cari" name="cari" class="fit" />
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
            <div class="flex ">
                <section id="three" class="wrapper align-center">
                    <div class="inner">
                        <div class="flex flex-2">
                            <?php foreach ($elektronik as $elektro) : ?>
                                <article>
                                    <div class="image">
                                        <img src="assets/img/<?= $elektro['foto']; ?>" />
                                    </div>
                                    <header>
                                        <h3><?= $elektro['kode_barang']; ?></h3>
                                    </header>
                                    <p>
                                        <a href="php/detail.php?id=<?= $elektro['id']; ?>">
                                            <button class="button flex">
                                                <?= $elektro['nama']; ?>
                                            </button>
                                        </a>
                                    </p>
                                    <footer>
                                    </footer>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>
    </section>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>