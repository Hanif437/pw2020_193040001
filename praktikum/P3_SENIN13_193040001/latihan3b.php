<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3.B</title>
    <style>
    .container{
        border : 2px solid black;
        text-align: center;
    }
    </style>
</head>
<body>
<?php 
    $jawabanIsset = "Isset adalah = Salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form. <br>";
    $jawabanEmpty = "Empty adalah = Fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong dan diisi. ";

    $GLOBALS['isset'] = $jawabanIsset;
    $GLOBALS['empty'] = $jawabanEmpty;


    function soal($style){
        echo "<div class = $style> 
        <p>" .$GLOBALS['isset'] . "</p>
        <p>" .$GLOBALS['empty'] . "</p>
        </div>";
    }
     echo soal('container');
?>
<a href="index.html">Kembali</a>
</body>
</html>