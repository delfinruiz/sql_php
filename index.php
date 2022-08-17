<!DOCTYPE html>
<html lang="es">

	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Inventario Mascotas</title>

		<link href="css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	</head>

	<body>

		<?php

			include_once "includes/header.php" 

		?>


		<div class="container my-3">

			<div class="row my-3">

				<div class="col-9">
					<h1>Inventario de Mascotas</h1>
				</div>

				<div class="col-3 d-grid gap-2 d-md-flex justify-content-md-end my-2">

					<button type="button" class="btn btn-amarillo-secundario" data-bs-toggle="modal" data-bs-target="#exportar"><i
							class="bi bi-file-earmark-excel"></i></button>

					<button type="button" class="btn btn-morado-secundario" data-bs-toggle="modal" data-bs-target="#agregar"><i
							class="bi bi-plus-circle"></i></button>

				</div>

			</div>


			<div class="row">

				<div class="col-12">
					<div class="table-responsive">

						<table id="lista_mascotas" class="display" style="width:100%">
							<thead class="thead-dark">
								<tr>
									<th>Identificador</th>
									<th>Nombre</th>
									<th>Edad</th>
									<th>Fecha de Nacimiento</th>
									<th style="width:150px;">Accion</th>

								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

		<?php 

			include_once "includes/footer.php";
			include_once "includes/modal.php" 

		?>

		<script src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
		</script>
		<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="js/listar.js"></script>
		<script src="js/ingresar.js"></script>
		<script src="js/eliminar.js"></script>
		<script src="js/editar.js"></script>




	</body>

</html>