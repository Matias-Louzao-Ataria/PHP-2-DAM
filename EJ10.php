<?php

$num2 = 1;
$num = 0;
$res = 0;

while($res < 10000){
    $res = $num+$num2;
    echo ", ".$res;
    $num = $num2;
    $num2 = $res;
}

?>