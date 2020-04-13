<?php
$nama = [
        "Christiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint German",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "AC Milan",
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4C</title>
    <style>
        .border {
            border: 1px solid black;
            display: inline-block;
        }
        li{
            display : block;
        }
    </style>
</head>
<body>
<div class = "border">
        <p><b>Daftar pemain bola dan klub terkenal</b>
        <?php foreach($nama as $klub => $nama): ?>
         <li><?= "$klub : $nama" ?></li>

            <?php endforeach ?>
            </p>
</div>
    
</body>
</html>

