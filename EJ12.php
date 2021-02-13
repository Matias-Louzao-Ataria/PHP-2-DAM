<?php 
    //5! = 1*2*3*4
    $num = 5;//numero a calcular factorial
    $fact = 1;
    $cont = 0;
    //$cont = $num;

    do{
        $fact *= $num;
        $num--;
    }while($num != 0);
    echo $fact;

?>