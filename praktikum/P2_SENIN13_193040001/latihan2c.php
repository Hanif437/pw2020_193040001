<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bulat{
        width: 50px;
        height: 50px;
        border-radius: 50px;
        background-color: salmon;
        border: 2px solid black;
        color: black;
        line-height: 50px;
        display: inline-block;
        text-align: center;
        margin: 5px;

    .clear{
        clear: both;
    }
    }
    
    </style>



</head>
<body>
    
    <?php 
    for ($i = 1; $i <= 3; $i++){
        for ($j = 1; $j <= $i; $j++)
        {
        echo "<div class='bulat'>$i</div>";
        }
        echo  '<div class="clear"></div>';
        }
        ?>

</body>
</html>