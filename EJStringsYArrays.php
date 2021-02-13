<?php
//EJ1
echo str_replace("bord","lmir","abordaje");

//EJ2
function algo($str,$letra){
    
    $cont = 0;
    for($i = 0;$i < strlen($str);$i++){
        if($str[$i] == $letra){
            $cont++;
        }
    }
    return $cont;
}
echo algo("aHaoalaaa",'a');
?>