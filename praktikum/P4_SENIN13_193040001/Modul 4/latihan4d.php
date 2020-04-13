<?php
$pemain = [
        ["no" => 1,
        "nama" => "Christiano Ronaldo",
        "klub" => "Juventus",
        "main" => 100,
        "gol" => 76,
        "assist" => 30],
        ["no" => 2,
        "nama" => "Lionel Messi",
        "klub" => "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12],
        ["no" => 3,
        "nama" => "Luca Modric",
        "klub" => "Real Madrid",
        "main" => 87,
        "gol" => 12,
        "assist" => 48],
        ["no" => 4,
        "nama" => "Mohammad Salah",
        "klub" => "Liverpool",
        "main" => 90,
        "gol" => 103,
        "assist" => 8],
        ["no" => 5,
        "nama" => "Neymar Jr",
        "klub" => "Paris Saint German",
        "main" => 109,
        "gol" => 56,
        "assist" => 15],
        ["no" => 6,
        "nama" => "Sadio Mane",
        "klub" => "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70],
        ["no" => 7,
        "nama" => "Zlatan Ibrahimovic",
        "klub" => "AC Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12],
    
];
$total_main = 0;
$total_gol = 0;
$total_assist = 0;
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4D</title>
    <style>
        table{
            margin: auto;
        }
    </style>
</head>
<body>


    <table border = "1" cellpadding = "4" cellspacing = "0">
    
        <tr>
        
            <td><b><center>NO</center></b></td>
            <td><b><center>NAMA</center></b></td>
            <td><b><center>KLUB</center></b></td>
            <td><b>MAIN</b></td>
            <td><b>GOL</b></td>
            <td><b>ASSIST</b></td>
            
        </tr>
        <?php foreach ($pemain as $pl) : ?>
        <tr>
        
            <td><?= $pl["no"]; ?></td>
            <td><?= $pl["nama"]; ?></td>
            <td><?= $pl["klub"]; ?></td>
            <td><?= $pl["main"]; ?></td>
            <td><?= $pl["gol"]; ?></td>
            <td><?= $pl["assist"]; ?></td>
            
        </tr>
        <?php endforeach; ?>
        <tr>
            <td>#</td>
            <td cellspacing = "4" cellpadding = "3" colspan="2"><center>Jumlah</center></td>
            <td>
                <?php
                    foreach($pemain as $data){
                        $total_main = $total_main + $data['main'];
                    }
                    echo $total_main;
                ?>
            </td>
            <td> 
                <?php
                    foreach($pemain as $data){
                        $total_gol = $total_gol + $data['gol'];
                    }
                    echo $total_gol;
                ?>
            </td>
            <td>
                <?php
                    foreach($pemain as $data){
                        $total_assist = $total_assist + $data['assist'];
                    }
                    echo $total_assist;
                ?>
            </td>
        </tr>
        
    </table>

</body>
</html>