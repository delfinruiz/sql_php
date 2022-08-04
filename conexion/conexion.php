<?php

    $contraseña         = "413471*IIO";
    $usuario            = "sa";
    $nombreBaseDeDatos  = "pruebas_parzibyte";
    $rutaServidor       = "147.182.192.121";

    try {

        $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos;Encrypt=false", $usuario, $contraseña);
        $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       // echo "Se conectó correctamente a la base de datos: $nombreBaseDeDatos";

    } catch (Exception $e) {

        echo "Ocurrió un error con la base de datos: $nombreBaseDeDatos" . $e->getMessage();

    }


/*
    $serverName     = "147.182.192.121, 1433";
    $connectionInfo = array("Database"=>"pruebas_parzibyte", "UID"=>"sa", "PWD"=>"413471*IIO", "CharacterSet"=>"UTF-8","Encrypt"=>false);
    $conn           = sqlsrv_connect($serverName, $connectionInfo);

    if($conn){

        echo "exito";

    }else{

        echo "error";
        die( print_r( sqlsrv_errors(), true));
    }

*/

/*
    
    class Cconexion{

            function ConexionBD(){
                $host       = 'peoplebpo.altitude.com';
                $dbname     = 'rdb2';
                $username   = 'bq_PeopleBPO';
                $pasword    = '$A3R+tROx1';
                $puerto     = 9433;

                try{
                    $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname;Encrypt=false", $username,$pasword);
                    echo "Se conectó correctamente a la base de datos: $dbname";
                }
                catch(PDOException $exp){
                    echo("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
                }
                return $conn;
            }

    }

    */

?>
