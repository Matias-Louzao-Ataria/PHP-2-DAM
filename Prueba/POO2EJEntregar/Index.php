<?php

require("Persona.php");
require("Noria.php");

$p = new Persona("A",3,"12345678A","C",true);
$p2 = new Persona("R",3,"12345678A","Vigo",true);
$p3 = new Persona("T",3,"12345654A","Vigo",true);
$p4 = new Persona("G",3,"12343453A","Vigo",true);
echo Persona::comprobarDNI("12345678A");
echo '<br>';
echo $p -> getDni();
$n = new Noria();
$n -> inicioViaje($p);
$n -> inicioViaje($p2);
$n -> inicioViaje($p3);
$n -> inicioViaje($p4);
echo "<br>";
echo $n -> getPasajerosActuales()." pasajeros";
echo "<br>";
$n -> ListaPasajeros();
echo '<br>';
$n -> finViaje($p)."B";
//$n -> finViaje(new Persona("A",3,"12245678A","C",true));
echo '<br>';
echo $n -> getPasajerosActuales()." pasajeros";
echo "<br>";
$n -> ListaPasajeros();
$n -> listaVigueses();
echo "Se han subido ".$n -> getTotalClientes()." a la noria";
?>