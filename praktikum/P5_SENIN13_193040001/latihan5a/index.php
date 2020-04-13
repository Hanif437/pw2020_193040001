<?php


    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal!");

    mysqli_select_db($conn, "tubes_193040001") or die ("Database Salah!");

    $result = mysqli_query($conn, "SELECT * FROM elektronik");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 A</title>
    <style>
        table{
            text-align: center;
            margin : auto;
            background-color: salmon;
            font-size : large;
        }
        img{
            border : 2px solid black;
        }
    </style>
</head>
<body>
<div class = "container">
    <h1><center>BARANG ELEKTRONIK</center></h1>
    <table border = "1" cellspacing = "0" cellpadding = "10">
        <tr>
            <td><center><b>NO</b></center></td>
            <td><center><b>FOTO</b></center></td>
            <td><center><b>KODE BARANG</b></center></td>
            <td><center><b>NAMA</b></center></td>
            <td><center><b>JENIS BARANG</b></center></td>
            <td><center><b>HARGA</b></center></td>
            
        </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i?></td>
            <td><img src="assets/img/<?= $row["foto"]; ?>"></td>
            <td><?= $row["kode_barang"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jenis_barang"]; ?></td>
            <td><?= $row["harga"]; ?></td>
        </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
    </table>
</div>
</body>
</html>