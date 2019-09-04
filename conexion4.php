<?php

  if($_POST){
    $usuario= $_POST['email'];
    $contrasena= $_POST['pass'];


echo "su usuario es  $usuario
     su contraseña es  $contrasena"; 
   
   
 }else{
     echo "no hay post";
 }

    


?>