<?php

define("PLUS",3000);
abstract class Empleado{
    private $nombre = "";
    private $edad = 0;
    private $salario = 0;

    public function setNombre($nombre){
        if(strlen($nombre) > 0){
            $this -> nombre = $nombre;
        }
    }

    public function getNombre(){
        return $this -> Nombre;
    }

    public function setEdad($edad){
        if($edad >= 0){
            $this -> edad = $edad;
        }
    }

    public function getEdad(){
        return $this -> edad;
    }
    
    public function setSalario($salario){
        if($salario >= 0){
            $this -> salario = $salario;
        }
    }

    public function getSalario(){
        return $this -> salario;
    }

    public function __construct($nombre,$edad,$salario){
        $this -> setNombre($nombre);
        $this -> setEdad($edad);
        $this -> setSalario($salario);
    }
}

class Comercial extends Empleado{
    private $comision = 0;
    
    public function setComision($comision){
        if($comision >= 0){
            $this -> comision = $comision;
        }
    }

    public function getComision(){
        return $this -> comision;
    }

    public function plus(){
        if($this -> getEdad() > 30 && $this -> getComision() > 200){
            $this -> setSalario($this -> getSalario()+PLUS);
        }
    }

    public function __construct($nombre,$edad,$salario,$comision){
        parent::__construct($nombre,$edad,$salario);
        $this -> setComision($comision);
        $this -> plus();
    }
}

class Repartidor extends Empleado{
    private $zona = "";

    public function setZona($zona){
        if(strlen($zona) > 0){
            $this -> zona = $zona;
        }
    }

    public function getZona(){
        return $this -> zona;
    }

    public function plus(){
        if($this -> getEdad() < 25 && strcasecmp($this -> getZona(),"zona 3") == 0){
            $this -> setSalario($this -> getSalario()+PLUS);
        }
    }

    public function __construct($nombre,$edad,$salario,$zona){
        parent::__construct($nombre,$edad,$salario);
        $this -> setZona($zona);
        $this -> plus();
    }
}

$c = new Comercial("A",31,20,201);
echo $c -> getSalario();
echo "<br>";
$r = new Repartidor("A",24,21,"zona 3");
echo $r -> getSalario();


class Bebida{
    private $id;
    private $litros = 0;
    private $precio = 0;
    private $marca = "";

    public function setId($id){
        $this -> id = $id;
    }

    public function getId(){
        $this -> id;
    }

    public function setLitros($litros){
        $this -> litros = $litros;
    }

    public function getLitros(){
        $this -> litros;
    }

    public function setPrecio($precio){
        $this -> precio = $precio;
    }

    public function getPrecio(){
        return $this -> precio;
    }

    public function setMarca($marca){
        $this -> marca = $marca;
    }

    public function getMarca(){
        return $this -> marca;
    }

    public function __construct($id,$litros,$precio,$marca){
        $this -> setId($id);
        $this -> setLitros($litros);
        $this -> setPrecio($precio);
        $this -> setMarca($marca);
    }
}

class Agua extends Bebida{
    private $origen = "";

    public function setOrigen($origen){
        $this -> origen = $origen;
    }

    public function getOrigen(){
        return $this -> origen;
    }

    public function __construct($id,$litros,$precio,$marca,$origen){
        parent::__construct($id,$litros,$precio,$marca);
        $this -> setOrigen($origen);
    }
}   

class BebidaAzucarada{
    private $azucar = 0;
    private $promocion = false;

    public function setAzucar(){
        $this -> azucar = $azucar;
    }

    public function getAzucar(){
        return $this -> azucar;
    }

    public function setPromocion(){
        $this -> promocion = $promocion;
    }

    public function getPromocion(){
        return $this -> promocion;
    }

    public function getPrecio(){
        $disc = 0;
        if($this -> getPromocion){
            $disc = 0.1;
        }
        return parent::getPrecio()-parent::getPrecio()*$disc;
    }

    public function __construct($id,$litros,$precio,$marca,$azucar,$promocion){
        parent::__construct($id,$litros,$precio,$marca);
        $this -> setAzucar($azucar);
        $this -> setPromocion($promocion);
    }
}

class Almacen{
    private $estanteria = array(array());

    public function revisarId($id){
        $id = array();
        for($i = 0;$i < count($estanteria);$i++){
            for($j = 0;$j < count($estanteria[$i]);$j++){
                if(array_search($estanteria[$j] -> getId(),$id,true) !== false){
                    array_push($estanteria[$j] -> getId());
                }else{
                    //array_splice($estanteria[$i],array_search($estanteria[$j] -> getId(),$id,true));
                    return false;
                }
            }
        }
        return true;
    }

    public function añadir($bebida){
        if($this -> revisarId($bebida -> getId())){
            for($i = 0;$i < count($estanteria);$i++){
                if(count($estanteria[$i]) < 5){
                    array_push($estanteria[$i],$bebida);
                    break;
                }
            }
        }
    }

}
?>