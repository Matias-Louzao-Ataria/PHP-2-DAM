<?php
//require("../POOEJ1.php");// En php se importa así. require("ruta hasta el archivo");

/*$l = new Libro();
$l -> printTitulo();*/

abstract class Vehiculo{
    private $color;
    private $peso;

    public function setColor($color){
        $this -> color = $color;
    }

    public function getColor(){
        return $this -> color;
    }
    
    public function setPeso($peso){
        $this -> peso = $peso;
    }
    
    public function getPeso(){
        return $this -> peso;
    }

    public function __construct($color,$peso){
        $this -> setColor($color);
        $this -> setPeso($peso);
    }

    public function circular(){
        echo "El vehículo circula!";
    }

    public abstract function añadir_persona($peso_persona);
}

class Dos_ruedas extends Vehiculo{

    private $cilindrada;

    public function poner_gasolina($litros){//Siempre que se esté fuera de la clase donde se declara la variable privada se tiene que utilizar un setter o un getter.
        $this -> setPeso($this -> getPeso()+$litros);
    }

    public function añadir_persona($peso_persona){
        $this -> setPeso($peso_persona+2);
    }
}

class Cuatro_ruedas extends Vehiculo{
    private $numero_puertas;

    public function setNumPuertas($num){
        $this -> numero_puertas = $num;
    }

    public function getNumPuertas(){
        return $this -> numero_puertas;
    }

    public function repintar($color){//Siempre que se esté fuera de la clase donde se declara la variable privada se tiene que utilizar un setter o un getter.
        $this -> setColor($color);
    }

    public function añadir_persona($peso_persona){
        $this -> setPeso($peso_persona);
    }
}

class Coche extends Cuatro_ruedas{
    private $numero_cadenas_nieve;

    public function getCadenas(){
        return $this -> numero_cadenas_nieve;
    }

    public function añadir_cadenas_nieve($num){
        $this -> numero_cadenas_nieve += $num;
    }

    public function quitar_cadenas_nieve($num){
        $this -> numero_cadenas_nieve -= $num;
    }
}

class Camion extends Cuatro_ruedas{
    private $longitud;

    public function setLongitud($longitud){
        $this -> longitud = $longitud;
    }

    public function getLongitud(){
        return $this -> longitud;
    }

    public function añadir_remolque($longitud_remolque){
        $this -> longitud += $longitud_remolque;
    }
}
?>