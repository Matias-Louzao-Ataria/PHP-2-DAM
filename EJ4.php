<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $a = rand(1,5);

        switch ($a) {
            case 1:
                echo "Uno";
                break;
            
            case 2:
                echo "Dos";
                break;

            case 3:
                echo "Tres";
                break;

            case 4:
                echo "Cuatro";
                break;

            case 5:
                echo "Cinco";
                break;
            default:
                echo "No se cambia mi código!";
                break;
        }

    ?>
</body>
</html>