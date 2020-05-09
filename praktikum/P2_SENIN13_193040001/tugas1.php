<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak-salmon{
        border:2px solid black;
        line-height: 50px;
        text-align: center;
        margin: 2px;
        float: left;
        margin-right: 7px;
        background-color: salmon;
        width: 50px;
        height: 50px;
    }
    .kotak-lightblue{
        border:2px solid black;
        line-height: 50px;
        text-align: center;
        margin: 1px;
        float: left;
        margin-right: 7px;
        background-color: lightblue;
        width: 50px;
        height: 50px;
    }
    .clear {
        clear: both;
    }
    </style>
</head>
<body>
    <?php for ($i  = 1; $i <= 6; $i++) : ?>
        <?php for ($j = 1; $j <= 6; $j++) : ?>
            <?php if (($i + $j) % 2 == 0) : ?>
                <div class = "kotak-lightblue"></div>
            <?php else : ?>
                <div class= "kotak-salmon"></div>
            <?php endif ; ?>
        <?php endfor ; ?>
            <div class = "clear"></div>
    <?php endfor ; ?>
    
    </tr>
</body>
</html>