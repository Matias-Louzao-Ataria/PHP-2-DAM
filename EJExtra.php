<?php

function tabla($num){
    for($i = 0;$i < 11;$i++){
        echo $num ." x ". $i.": ".$num*$i;
        echo "<br>";
    }
}

function cuadrado($num){
    for($i = 0;$i < $num;$i++){
        echo "*";
    }
    echo "<br>";
    for($jj = 0;$jj < $num-2;$jj++){
        $j = 0;
        for(;$j < $num;$j++){
            echo "*";
            if($j == $num-1){
                echo "<br>";
            }
        }
    }
    for($i = 0;$i < $num;$i++){
        echo "*";
    }
}

function piramide($num){
    $linea = $num-2;
    for($i = 0;$i <= $num;$i++){
        if($i % 2 != 0){
            $linea--;
            for($h = 0;$h < $linea;$h++){
                echo "_";
            }
            for($j = 0;$j < $i;$j++){
                if(($j == 0 || $j == $i-1) || $i == $num){
                    echo "*";
                }else{
                    echo "&";
                }
            }
            echo "<br>";
        }
    }
}

function binario($num){
    $binario = "";
    $resto = 0;
    if($num >= 0 && $num <= 255){
        while($num > 0 && $num > 1){
            $resto = $num % 2;
            $num /= 2;
            if($resto == 0){
                $binario = '0'.$binario;
            }else{
                $binario = '1'.$binario;
            }
        }
        return $binario;
    }
}

$a = array('uno'=>1);
echo $a["uno"];
echo "<br>";
tabla(5);
echo "<br>";
cuadrado(5);
echo "<br>";
echo "<br>";
piramide(9);
echo "<br>";
echo "<br>";
echo binario(rand(0,255));
?>