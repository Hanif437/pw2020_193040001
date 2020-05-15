<?php
require '../../php/functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

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
                    <?= $elektro['nama']; ?>
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