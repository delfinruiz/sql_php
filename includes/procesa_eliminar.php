<?php

    $id	= (isset($_POST['id'])) ? $_POST['id'] : '';  

    include_once "../conexion/conexion.php";
    $sentencia = $base_de_datos->prepare("DELETE FROM mascotas WHERE id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado){
        
        echo 1;

    }else{

        echo 0;

    }

?>