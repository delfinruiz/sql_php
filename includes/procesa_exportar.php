<?php

        $inicio	= (isset($_POST['inicio'])) ? $_POST['inicio'] : '';  
        $fin	= (isset($_POST['fin'])) ? $_POST['fin'] : '';  

        require "../vendor/autoload.php";
        include_once "../conexion/conexion.php";

        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\IOFactory;

        $sentencia = $base_de_datos->query("SELECT id, nombre, edad, fecha FROM mascotas WHERE fecha BETWEEN '$inicio' AND '$fin'");
        $mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        $excel = new Spreadsheet();
        $hojaActiva = $excel->getActiveSheet();
        $hojaActiva->setTitle("Mascotas");
    
        $hojaActiva->getColumnDimension('A')->setWidth(20);
        $hojaActiva->setCellValue('A1', 'ID');
        $hojaActiva->getColumnDimension('B')->setWidth(20);
        $hojaActiva->setCellValue('B1', 'NOMBRE');
        $hojaActiva->getColumnDimension('C')->setWidth(20);
        $hojaActiva->setCellValue('C1', 'EDAD');
        $hojaActiva->getColumnDimension('D')->setWidth(20);
        $hojaActiva->setCellValue('D1', 'FECHA DE NACIMIENTO');
    
        $fila = 2;
    
        foreach($mascotas as $mascota){
            
            $hojaActiva->setCellValue('A'.$fila, $mascota->id);
            $hojaActiva->setCellValue('B'.$fila, $mascota->nombre);
            $hojaActiva->setCellValue('C'.$fila, $mascota->edad);
            $hojaActiva->setCellValue('D'.$fila, $mascota->fecha);
    
            $fila++;
    
        } 
        
    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="mascotas.xlsx"');
        header('Cache-Control: max-age=0');
        
        $writer = IOFactory::createWriter($excel, 'Xlsx');
        $writer->save('php://output');
    
        exit();

?>