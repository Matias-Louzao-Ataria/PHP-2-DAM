<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $edad = 70;

    function entrada(&$edad){   
        if($edad > 8 && $edad <= 16){
            return '5€';
        }else if($edad > 16 && $edad <=25){
            return '8€';
        }else if($edad > 25 && $edad <= 55){
            return '10€';
        }else if($edad > 55 && $edad <= 65){
            return '5€';
        }else{
            return 'gratis'; 
        }
    }
    echo entrada($edad);
    ?>
</body>
</html>