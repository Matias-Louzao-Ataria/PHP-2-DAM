<?php

$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$fecha = getdate();

if(!empty($nombre) && !empty($tel) && !empty($mail) && !empty($mensaje)){
    echo "El mensaje ".$mensaje." fue enviado por ".$nombre.", telefono ".$tel.". Su e-mail es: ".$mail.". Enviado el ".$fecha['mday']."/".$fecha['mon']."/".$fecha['year'].".";
}else{
    echo "Rellena el formulario";
}

?>