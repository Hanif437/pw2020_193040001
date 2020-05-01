<?php
require 'php/functions.php';
$elektronik = query("SELECT * FROM elektronik");
// var_dump($elektronik);
// foreach($elektronik as $elektro){
// echo $elektro['nama'];
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 D</title>
    <style>
        .container {
            border: 5px solid seagreen;
            width: 580px;
            height: 320px;
            padding-top: 10px;
            padding-left: 10px;
            border-radius: 30px;
            margin: auto;
            font-size: x-large;
            font-family: arial;
            background-color: black;
        }

        a:active {
            text-decoration: none;
            color: magenta;
        }

        a:link {
            text-decoration: none;
            color: salmon;
        }

        a:hover {
            text-decoration: none;
            color: seagreen;
        }

        .admin {
            background-color: black;
            color: white;
            border-radius: 10px;
            margin: auto;
        }
    </style>
</head>

<body>
    <h1>
        <center>DAFTAR BARANG ELEKTRONIK</center>
    </h1>
    <div class="container">
        <?php foreach ($elektronik as $elektro) : ?>
            <div class="nama">
                <a href="php/detail.php?id=<?= $elektro['id']; ?>">
                    <?= $elektro["nama"]; ?>
                </a>
            </div>
        <?php endforeach; ?>
        <center>
            <button class="admin">
                <a href="php/admin.php">Admin Disini!!!</a>
            </button>
        </center>
    </div>
    <h1>
        <center>ANDA PUAS, KAMI SENANG!!!</center>
    </h1>
</body>

</html>