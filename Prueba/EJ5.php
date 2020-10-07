<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 10;
    function multiplo(&$a,&$b){
        if($a % $b == 0){
            return 'múltiplo';
        }else{
            return 'no múltiplo';
        }
    }
    echo multiplo($a,$b);
    ?>
</body>
</html>