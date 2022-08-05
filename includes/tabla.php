<?php
        include_once "../conexion/conexion.php";

        $sentencia = $base_de_datos->query("select id, nombre, edad from mascotas");
        $mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>



<div class="container my-3">

<div class="row my-3">
	
	<div class="col-8"><h1>Inventario de Mascotas</h1></div>
	
	<div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end my-2">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar"><i class="bi bi-plus-circle"></i></button>
	</div>

</div>


<div class="row">

	<div class="col-12">
		<div class="table-responsive">
			
		<table id="razas" class="display" style="width:100%">
				<thead class="thead-dark">
					<tr>
						<th>Identificador</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th style="width:150px;">Accion</th>

					</tr>
				</thead>
				<tbody>

					<?php foreach($mascotas as $mascota){ ?>
						<tr>
							<td><?php echo $mascota->id ?></td>
							<td><?php echo $mascota->nombre ?></td>
							<td><?php echo $mascota->edad ?></td>
							<td class="text-center"><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id?>"><i class="bi bi-pencil-square"></i></a> <a href="#" class="btn btn-danger btn_eliminar"><i class="bi bi-trash"></i></a></td>

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

<script src="js/eliminar.js"></script>

<script>

    $('#razas').DataTable({
            "order": [
                [0, "desc"]
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }


    });

</script>