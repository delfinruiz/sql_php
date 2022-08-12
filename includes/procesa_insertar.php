<?php


    $nombre	            = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';  
    $edad	            = (isset($_POST['edad'])) ? $_POST['edad'] : '';
    $fecha_nacimiento	= (isset($_POST['fecha_nacimiento'])) ? $_POST['fecha_nacimiento'] : ''; 

    include_once"../conexion/conexion.php";

    $sentencia = $base_de_datos->prepare("INSERT INTO mascotas(nombre, edad, fecha) VALUES (?, ?, ?);");
    $resultado = $sentencia->execute([$nombre, $edad, $fecha_nacimiento]);

    if($resultado){

        echo "1";

    }else{

        echo "0";

    }
    
    


?>
