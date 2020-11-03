<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$error = false;    

    if(!empty($nombre) || $nombre == 0){
        
        if(!empty($email) || $email == 0){
            $error = (strpos($email,'@') === false);
            if(!empty($pass)){
                if(!(strlen($pass) >= 8 && strlen($pass) <= 10)){
                    $error = true;
                }
                if(!empty($pass2)){
                    if(!($pass === $pass2)){
                        $error = true;
                    }
                }else{
                    $error = true;
                }
            }else{
                $error = true;
            }
        }else{
            $error = true;
        }
    }else{
        $error = true;
    }
    
    if($error){
       echo "Existen errores en el formulario!"; 
    }else{
        echo"Registro realizado correctamente para el correo electrónico: ".$email.".";
    }
?>