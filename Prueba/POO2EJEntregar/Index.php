<?php

require("Persona.php");
require("Noria.php");

$p = new Persona("A",3,"12345678A","C",true);
$p2 = new Persona("R",15,"12345678A","Vigo",true);
$p3 = new Persona("T",27,"12345654A","NoVigo",false);
$p4 = new Persona("G",32,"12343453A","Vigo",true);
$p5 = new Persona("L",64,"12343453B","Lugo",true);
//echo Persona::comprobarDNI("12345678A");
//echo '<br>';
//echo $p -> getDni();
$n = new Noria();
$n -> inicioViaje($p);
echo "<br>";
$n -> inicioViaje($p2);
echo "<br>";
$n -> inicioViaje($p3);
echo "<br>";
$n -> inicioViaje($p5);
echo "<br>";
$n -> ListaPasajeros();
echo "<br>";
echo "Beneficio del viaje: ".$n -> beneficioViaje();
echo "<br>";
$n -> finViaje($p);
echo "<br>";
$n -> inicioViaje($p4);
echo "<br>";
echo $n -> getPasajerosActuales()." pasajeros";
echo "<br>";
$n -> ListaPasajeros();
echo '<br>';
//$n -> finViaje($p);
$n -> finViaje(new Persona("A",77,"12245678A","C",true));
echo '<br>';
//echo $n -> getPasajerosActuales()." pasajeros";
//echo "<br>";
//$n -> ListaPasajeros();
$n -> listaVigueses();
echo "Se han subido ".$n -> getTotalClientes()." a la noria";
?>