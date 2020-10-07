<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 2;
        function suma(&$a,&$b){
            return $a+$b;
        }
        echo suma($a,$b);
    ?>
</body>
</html>