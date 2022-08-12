<?php
        include_once "../conexion/conexion.php";

        $sentencia = $base_de_datos->query("select id, nombre, edad, fecha from mascotas");
        $mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        print json_encode($mascotas, JSON_UNESCAPED_UNICODE);

?>