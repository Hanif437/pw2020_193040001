<?php 
    function tumpukanBola($bola){
        for ($i = 1; $i <= $bola; $i++){ 
            for ($j = 1; $j <= $i; $j++) {
               echo "<div class = 'bola'>". $i ."</div>";
        }
        echo "<br>";
    } 
}           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3.C</title>
    <style>
        .bola{
            border-radius : 50%;
            background-color : salmon;
            height :50px;
            width : 50px;
            text-align : center;
            line-height : 50px;
            border : 2px solid black;
            display : inline-block;
            margin : 3px;
        }
    </style>
</head>
    
<body>
    <?php echo tumpukanBola(5); ?>
    <a href="index.html">Kembali</a>
</body>
</html>