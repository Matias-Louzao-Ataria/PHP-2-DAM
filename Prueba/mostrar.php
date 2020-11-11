<?php
require("POO2EJ1.php");

/*echo "Cosas de vehículo:";
echo "<br>";
$vehiculo = new Vehiculo("negro",1500);
$vehiculo -> circular();
echo "<br>";
$vehiculo -> añadir_persona(70);
echo $vehiculo -> getPeso()."Kg";
echo "<br>";*/

echo "Cosas de coche:";
echo "<br>";
$coche = new Coche("Verde",1400);
$coche -> añadir_persona(65);
$coche -> añadir_persona(65);
echo $coche -> getColor();
echo "<br>";
echo $coche -> getPeso()."Kg";
$coche -> repintar("Rojo");
$coche -> añadir_cadenas_nieve(2);
echo "<br>";
echo $coche -> getColor();
echo "<br>";
echo $coche -> getCadenas()." cadenas";

echo "<br>";
echo "Cosas de Dos ruedas:";
$dos = new Dos_ruedas("Negro",120);
$dos -> añadir_persona(80);
$dos -> poner_gasolina(20);
echo "<br>";
echo $dos -> getColor();
echo "<br>";
echo $dos -> getPeso()."Kg";

echo "<br>";
echo "Cosas de Camión:";
echo "<br>";
$camion = new Camion("Azul",10000);
$camion -> setNumPuertas(2);
$camion -> setLongitud(10);
$camion -> añadir_remolque(5);
$camion -> añadir_persona(80);
echo $camion -> getColor();
echo "<br>";
echo $camion -> getPeso()."Kg";
echo "<br>";
echo $camion -> getLongitud()."m";
echo "<br>";
echo $camion -> getNumPuertas()." puertas";
?>