<?php

    $id 	                    = (isset($_POST['id'])) ? $_POST['id'] : ''; 
    $nombre	                    = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';  
    $edad	                    = (isset($_POST['edad'])) ? $_POST['edad'] : '';
    $fecha_nacimiento_editar	= (isset($_POST['fecha_nacimiento_editar'])) ? $_POST['fecha_nacimiento_editar'] : ''; 

    include_once"../conexion/conexion.php";

    $sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = ?, edad = ?, fecha=? WHERE id = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $fecha_nacimiento_editar, $id]); # Pasar en el mismo orden de los ?

    if($resultado){

        echo "1";

    }else{

        echo "0";

    }
    
    


?>
