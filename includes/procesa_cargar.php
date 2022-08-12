<?php

    $id	= (isset($_POST['id'])) ? $_POST['id'] : '';

    include_once "../conexion/conexion.php";

    $sentencia = $base_de_datos->prepare("SELECT id, nombre, edad, fecha FROM mascotas WHERE id = ?;");
    $sentencia->execute([$id]);
    $mascota = $sentencia->fetchObject();

    echo json_encode($mascota);

?>