<?php

class Noria{
    public static $maxPersonas = 8;
    private $pasajeros = [];

    public function inicioViaje($persona){
        if($persona != null){
            if($persona -> getEdad() < 18){
                $pasajeros[count($pasajeros)] = $persona;
                echo $pasajeros[count($pasajeros)] -> getNombre();
            }else{
                //echo "a";
            }
        }else{
            return false;
        }
        return true;
    }
}

?>