<?php

require("Persona.php");
require("Noria.php");

$p = new Persona("A",30,"12345678A","C",true);
echo Persona::comprobarDNI("12345678A");
echo '<br>';
echo $p -> getDni();
$n = new Noria();
echo $n -> inicioViaje($p);
?>