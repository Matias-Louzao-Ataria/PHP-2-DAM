<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Matias">
    <title>Document</title>
</head>
<body>
    <p>Algo</p>
    <?php echo "algo pero php <br>";
    /*Comentario php*/
    //Comentario php
    #Comentario php
    function generarTabla($filas,$columnas){
        echo "Tablita:";
        echo "<table border='3px'>";
        for($i = 0;$i < $filas;$i++){
            echo "<tr>";
            for($j = 0;$j < $columnas;$j++){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    generarTabla(5,6);
    ?>
</body>
</html>