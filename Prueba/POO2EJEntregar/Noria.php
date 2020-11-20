<?php

class Noria{
    public static $maxPersonas = 8;
    private $pasajeros = [];
    private $totalClientes = 0;
    public function __construct(){
        
    }

    public function inicioViaje($persona){
        if($persona != null){
            if($persona -> getDni() != null){
                if($this -> comprobarPasajerosLegitimos($persona -> getDni())){
                    array_push($this -> pasajeros,$persona);
                    $this -> totalClientes++;
                }else{
                    return false;
                }
            }else{
                if($persona -> getEdad() < 18){
                    $this -> totalClientes++;
                    array_push($this -> pasajeros,$persona);
                    return true;
                }
            }
        }
        return false;
    }

    public function finViaje($persona){
        $pos = array_search($persona,$this -> pasajeros);
        if(is_int($pos)){
            array_splice($this -> pasajeros,$pos,1);
            return true;
        }
        return false;
    }

    public function beneficioViaje(){
        $recaudacion = 0;
        $extranjero = 0;
        for($j = 0;$j < count($this -> pasajeros);$j++){
            $personaActual = $this -> pasajeros[$j];
            if(strcasecmp($personaActual -> getConcello(),"vigo") == 0){
                $extranjero = 0;
            }else{
                $extranjero = 3;
            }
            if(!($personaActual -> hasPassvigo()) || $extranjero == 3){
                if($personaActual -> getEdad() >= 4 && $personaActual -> getEdad() <= 17){
                    $recaudacion += (2+$extranjero);
                }else if($personaActual -> getEdad() >= 18 && $personaActual -> getEdad() <= 64){
                    $recaudacion += (4+$extranjero);
                }else if($personaActual -> getEdad() >= 65){
                    $recaudacion += (2+$extranjero);
                }else{
                    
                }
            }
        }
        return $recaudacion;
    }

    public function ListaPasajeros(){
        for($k = 0;$k < count($this -> pasajeros);$k++){
            $pasajeroActual = $this -> pasajeros[$k];
            echo $pasajeroActual -> getNombre();
            echo " tiene ".$pasajeroActual -> getEdad()." años y su ";
            echo "concello es el de: ".$pasajeroActual -> getConcello();
            echo "<br>";
        }
        
    }

    public function ListaVigueses(){
        for($l = 0;$l < count($this -> pasajeros);$l++){
            $pasajeroActual = $this -> pasajeros[$l];
            if($pasajeroActual -> getConcello() == "Vigo"){
                echo "El DNI de: ".$pasajeroActual -> getNombre()." es: ".$pasajeroActual -> getDni();
                echo "<br>";
            }
        }
    }

    public function ListaMenores(){
        for($l = 0;$l < count($this -> pasajeros);$l++){
            $pasajeroActual = $this -> pasajeros[$l];
            if($pasajeroActual -> getEdad() < 18){
                echo "El DNI de: ".$pasajeroActual -> getNombre()." es: ".$pasajeroActual -> getDni();
                echo "<br>";
            }
        }
    }

    public function comprobarPasajerosLegitimos($dni){
        for($i = 0;$i < count($this -> pasajeros);$i++){
            $dnicomp = $this -> pasajeros[$i] -> getDni();
            if($dnicomp == $dni){
                return false;
            }
        }
        return true;
    }

    public function getTotalClientes(){
        return $this -> totalClientes;
    }

    public function getPasajerosActuales(){
        return count($this -> pasajeros);
    }

}
?>