<?php
    define('_MAXPASAJEROS',2);
class Noria{
    private $pasajeros = [];
    private $totalClientes = 0;
    public function __construct(){
        
    }

    public function inicioViaje($persona){
        if(count($this -> pasajeros) < _MAXPASAJEROS){
            if($persona != null){
                if($persona -> getDni() != null){
                    if($this -> comprobarPasajerosLegitimos($persona -> getDni())){
                        array_push($this -> pasajeros,$persona);
                        echo $persona -> getNombre()." ha subido correctamente!";
                        $this -> totalClientes++;
                        return true;
                    }else{
                        echo "Sospechoso de nombre: ".$persona -> getNombre().", DNI: ".$persona -> getDni().", edad: ".$persona -> getEdad()." años y concello de: ".$persona -> getConcello() ." ha sido detenido, por suplantación de identidad, ese DNI es de alguien que está subido actualmente a la noria!";
                    }
                }else{
                    if($persona -> getEdad() < 18){
                        array_push($this -> pasajeros,$persona);
                        echo $persona -> getNombre()." ha subido correctamente!";
                        $this -> totalClientes++;
                        return true;
                    }else{
                        echo "Si usted es mayor de 18 años necesita un DNI para subir!";
                    }
                }
            }else{
                echo "La persona que ha intentado subir en realidad no está aquí!";
            }
        }else{
            echo "Usted no puede subir porque la noria está llena!";
        }
        return false;
    }

    public function finViaje($persona){
        $pos = array_search($persona,$this -> pasajeros,true);
        if($pos !== false){
            array_splice($this -> pasajeros,$pos,1);
            echo $persona -> getNombre()." se ha bajado correctamente!";
            return true;
        }else{
            echo $persona -> getNombre()." de DNI: ".$persona -> getDni().", edad: ".$persona -> getEdad()." años y concello de: ".$persona -> getConcello()." no está subido al a noria y por lo tanto no puede bajarse!";
        }
        return false;
    }

    public function beneficioViaje(){
        $recaudacion = 0;
        $extranjero = 0;
        for($j = 0;$j < count($this -> pasajeros);$j++){
            $personaActual = $this -> pasajeros[$j];
            if(strcasecmp($personaActual -> getConcello(),"Vigo") == 0){
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