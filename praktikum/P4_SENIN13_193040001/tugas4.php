<?php
$barang = [
    ["foto" => "BE01.jpg",
    "kode" => "BE01",
    "nama" => "Samsung A50",
    "jenis" => "Smartphone",
    "harga" => "Rp. 3.500.000"], //1
    ["foto" => "BE02.jpg",
    "kode" => "BE02",
    "nama" => "Rexus F65",
    "jenis" => "Headset",
    "harga" => "Rp. 170.000"], //2
    ["foto" => "BE03.jpg",
    "kode" => "BE03",
    "nama" => "Epson L1110",
    "jenis" => "Printer",
    "harga" => "Rp. 1.700.000"], //3
    ["foto" => "BE04.jpg",
    "kode" => "BE04",
    "nama" => "Digital Alliance Luna Gaming Mouse",
    "jenis" => "Aksesoris Gaming",
    "harga" => "Rp. 140.000"], //4
    ["foto" => "BE05.jpg",
    "kode" => "BE05",
    "nama" => "Logitech G102 Prodigy Gaming",
    "jenis" => "Aksesoris Gaming",
    "harga" => "Rp. 250.000"], //5
    ["foto" => "BE06.jpg",
    "kode" => "BE06",
    "nama" => "Realme 5 Pro",
    "jenis" => "Smartphone",
    "harga" => "Rp. 3.100.000"], //6
    ["foto" => "BE07.jpg",
    "kode" => "BE07",
    "nama" => "Sony Play Station 3 Slim",
    "jenis" => "Konsol Game",
    "harga" => "Rp. 1.650.000"], //7
    ["foto" => "BE08.jpg",
    "kode" => "BE08",
    "nama" => "Nintendo Switch",
    "jenis" => "Konsol Game",
    "harga" => "Rp. 7.500.000"], //8
    ["foto" => "BE09.jpg",
    "kode" => "BE09",
    "nama" => "Sony Play Station 4 Pro",
    "jenis" => "Konsol Game",
    "harga" => "Rp. 6.250.000"], //9
    ["foto" => "BE10.jpg",
    "kode" => "BE10",
    "nama" => "Keyboard Gaming Imperion Gamemaster KG-G180",
    "jenis" => "Aksesoris Game",
    "harga" => "Rp. 130.000"], //10
]
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
    <style>
        table{
            text-align: center;
            margin : auto;
        }
    </style>
</head>
<body>

    <h1><center>Daftar Elektronik</center></h1>
    <table border = "1" cellspacing = "0" cellpadding = "4">
        <tr>
            <td><center><b>FOTO</b></center></td>
            <td><center><b>KODE BARANG</b></center></td>
            <td><center><b>NAMA</b></center></td>
            <td><center><b>JENIS BARANG</b></center></td>
            <td><center><b>HARGA</b></center></td>
        </tr>
            <?php foreach ($barang as $be) : ?>
        <tr>
        
            <td><img src="img/<?= $be["foto"]; ?>"></td>
            <td><?= $be["kode"]; ?></td>
            <td><?= $be["nama"]; ?></td>
            <td><?= $be["jenis"]; ?></td>
            <td><?= $be["harga"]; ?></td>
            
        </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>