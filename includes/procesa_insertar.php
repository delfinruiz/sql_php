<?php


    $nombre	= (isset($_POST['nombre'])) ? $_POST['nombre'] : '';  
    $edad	= (isset($_POST['edad'])) ? $_POST['edad'] : ''; 

    include_once"../conexion/conexion.php";

    $sentencia = $base_de_datos->prepare("INSERT INTO mascotas(nombre, edad) VALUES (?, ?);");
    $resultado = $sentencia->execute([$nombre, $edad]);

    if($resultado){

        echo "1";

    }else{

        echo "0";

    }
    
    


?>
