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
    <title>Latihan 5 C</title>
    <style>
        .container {
            border: 2px solid seagreen;
            width: 160px;
            height: 300px;
            text-align: center;
            padding-top: 5px;
            margin: auto;
            background-color: salmon;
            border-radius: 50px;
            font-family: arial;
        }

        img {
            border: 1px solid black;
            border-radius: 25px;
        }

        button:hover,
        a:hover {
            text-decoration: none;
            color: magenta;
        }

        button:link,
        a:link {
            text-decoration: none;
            color: seagreen;
        }

        button:active,
        a:active {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $elektro["foto"]; ?>">
        </div>
        <div class="keterangan">
            <p><?= $elektro["kode_barang"]; ?></p>
            <p><?= $elektro["nama"]; ?></p>
            <p><?= $elektro["jenis_barang"]; ?></p>
            <p><?= $elektro["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>