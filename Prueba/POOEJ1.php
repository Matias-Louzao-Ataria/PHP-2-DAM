<?php

class Libro{
    private $autor = "sdasd";
    private $titulo = "sdsd";
    private $paginas = "dfdgdgwsg";
    private $refLibro ;
    private $prestado = 0;
    private $contieneCD;
    
    public function getTitulo(){
        return $this -> titulo;
    }
    
    public function getAutor(){
        return $this ->  autor;
    }
    
    public function getPaginas(){
        return $this -> paginas;
    }
    
    public function getPrestado(){
        return $this -> prestado;
    }
    
    public function contieneCD(){
        return $this -> contieneCD;
    }
    
    public function setRefLibro($a){
        if(strlen($a) > 3){
            $this -> refLibro = $a;
        }else{
            echo "Cadena invalida!";
        }
    }
    
    public function setPrestado(){
        $this -> prestado++;
    }
    
    public function printTitulo(){
        echo $this -> titulo;
    }
    
    public function printAutor(){
        echo $this -> autor;
    }
    
    public function printLibro(){
        echo $this -> getTitulo()."\n";
        echo $this -> getAutor()."\n";
        echo $this -> getPaginas()."\n";
        if(strlen($refLibro) > 0){
            echo $this -> refLibro."\n";
        }
        echo $this -> prestado."\n";
    }
    
    public function __construct(){
        $this -> setRefLibro("asdd");
        $this -> contieneCD = false;
    }
} 

/*$l = new Libro();
$l -> printLibro();*/

?>