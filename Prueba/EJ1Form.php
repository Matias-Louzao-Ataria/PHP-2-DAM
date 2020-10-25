<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $descuento = $_POST['descuento'];
    $iva = $_POST['iva'];
    $metodo = $_POST['envio'];

    if(!empty($precio) && !empty($cantidad) && !empty($descuento) && !empty($iva) && isset($metodo)){
        echo (($precio+($precio*($iva/100)))-$descuento)*($cantidad+$envio);
    }else{
        echo "Rellena el formulario!";
    }

?>
