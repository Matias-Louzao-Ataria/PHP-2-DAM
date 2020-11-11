<?php

class Persona{
   private $edad = 0;
   private $dni = null;
   private $nombre = null;
   private $concello = null;
   private $passvigo = null;

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
                $this -> dni = $dni;
            }
        }else{
            if(!($dni != null)){
                $this -> dni = dni;
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
        if($concello != "Vigo"){
            $this -> passvigo = null;
        }else{
            $this -> passvigo = $passvigo;
        }
    }

    public function getPassvigo(){
        return $this -> passvigo;
    }

   public function __construct($nombre,$edad,$dni = null,$concello,$passvigo = null){
        $this -> setNombre($nombre);
        $this -> setEdad($edad);
        $this-> setDni($dni);
        $this -> setConcello($concello);
        $this -> setPassvigo($passvigo);
   }
}

?>