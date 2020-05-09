<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3.A</title>
    <style>
        .tulisan{
            font-size : 28px;
            font-family : arial;
            font-style : italic;
            color : #8c782d;
            font-weight : bolder;
            margin-top : 0px;
            text-align: center;
        
        }
        .bungkus{
            border : 2px solid black;
            box-shadow : 1px 1px 10px 1px; 
            border-radius : 10px;
            width : 520px;
            height : 50px;
            line-height: 50px;
            
        }
         </style>
    </head>
<body>

<?php 

function gantiStyle($tulisan, $style1, $style2) {
    echo "<div class = '$style1'> 
            <p class = '$style2'> $tulisan </p>
        </div>";
}
?>

<?php 
        echo gantiStyle(" Selamat datang di praktikum PW 2020 ", "bungkus" , "tulisan");
    ?>
    <a href="index.html">Kembali</a>
</body>
</html>