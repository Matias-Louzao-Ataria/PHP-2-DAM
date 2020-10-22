<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $descuento = $_POST['descuento'];
    $iva = $_POST['iva'];
    $metodo = $_POST['envio'];

    if(isset($precio) && isset($cantidad) && isset($descuento) && isset($iva) && isset($metodo)){
        echo "a";
    }

?>