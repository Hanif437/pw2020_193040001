<?php

$nama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4B</title>

    <style>
        .border{
            border : 1px solid black;
            display : inline-block;
        }
    </style>

</head>
<body>
<div class = "border">
    <ol><b>Daftar pemain bola terkenal</b>
    <?php
        for ($i = 0; $i < count ($nama); $i++){
            echo "<li>$nama[$i]</li>";
        }
    ?>
    </ol>
    <ol><b>Daftar pemain bola terkenal baru</b>
    <?php
        $nama[] = "Luca Modric";
        $nama[] = "Sadio Mane";

        for ($j = 0; $j < count ($nama); $j++){
            $hasil = sort ($nama);
            echo "<li>$nama[$j]</li>";
        }
    ?>
</div>
</body>
</html>
