<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $radio = 10;
        function calculo(&$radio){
            return pi()*($radio*$radio);
        }
        echo calculo($radio);
    ?>
</body>
</html>