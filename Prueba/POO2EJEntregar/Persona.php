<?php

class Persona{
   private $edad = 0;
   private $dni = "";
   private $nombre = "";
   private $concello = "";
   private $passvigo = false;

    public function setNombre($nombre){
        if($nombre == null || strlen($nombre) <= 0){
            
        }else{
            $this -> nombre = $nombre;
        }
    }

    public function getNombre(){
        return $this -> nombre;
    }

    public function setDni($dni){
        if($this -> edad < 18){
            if($dni != null){
                $this -> dni = null;
            }else{
                if(Persona::comprobarDNI($dni)){
                    $this -> dni = $dni;
                }else{
                    $this -> dni = null;
                }
            }
        }else{
            if($dni != null){
                if(Persona::comprobarDNI($dni)){
                    $this -> dni = $dni;
                }else{
                    $this -> dni = null;
                }
            }else{
                $this -> dni = null;
            }
        }
    }

    public function getDni(){
        return $this -> dni;
    }

    public function setEdad($edad){
        if($edad >= 0){
            $this -> edad = $edad;
        }
    }

    public function getEdad(){
        return $this -> edad;
    }

    public function setConcello($concello){
        if(strlen($concello) <= 0 || $concello == null){

        }else{
            $this -> concello = $concello;
        }
    }

    public function getConcello(){
        
    }

    public function setPassvigo($passvigo){
        if($this -> concello != "Vigo"){
            $this -> passvigo = false;
        }else{
            $this -> passvigo = $passvigo;
        }
    }

    public function hasPassvigo(){
        return $this -> passvigo;
    }

    public static function comprobarDNI($dni){
        $cont = 0;
        $letra;
        if(strlen($dni) == 9){
            for($i = 0;$i < strlen($dni);$i++){
                if($dni[$i] >= 1 || $dni[$i] <= 9){
    
                }else{
                    if($i == strlen($str)-1){
                        if($dni[$i] >= 65 || $dni[$i] <= 90){
                            
                        }
                    }else{
                        return false;
                    }
                }
            }
        }else{
            return false;
        }
        return true;
    }

   public function __construct($nombre,$edad,$dni,$concello,$passvigo){
        $this -> setNombre($nombre);
        $this -> setEdad($edad);
        $this-> setDni($dni);
        $this -> setConcello($concello);
        $this -> setPassvigo($passvigo);
   }
}
?>