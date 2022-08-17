<!-- Modal insertar -->

<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="agregar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR MASCOTA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST">
                            <div class="form-group  mt-2">
                                <label for="nombre">Nombre</label>
                                <input required name="nombre" type="text" id="nombre" placeholder="Nombre de mascota"
                                    class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="edad">Edad</label>
                                <input required name="edad" type="number" id="edad" placeholder="Edad de mascota"
                                    class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="fecha">Fecha de Nacimiento</label>
                                <input required name="fecha" type="date" id="fecha_nacimiento" placeholder="Fecha de Nacimiento"
                                    class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rojo-secundario" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-verde-primario" id="btn_ingresar">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar -->

<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar">EDITAR MASCOTA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form>
                            <div class="form-group  mt-2">

                                <input type="hidden" id="id_editar">

                                <label for="nombre">Nombre</label>
                                <input required name="nombre_editar" type="text" id="nombre_editar"
                                    placeholder="Nombre de mascota" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="edad">Edad</label>
                                <input required name="edad_editar" type="number" id="edad_editar"
                                    placeholder="Edad de mascota" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="fecha">Fecha de Nacimiento</label>
                                <input required name="fecha_nacimiento_editar" type="date" id="fecha_nacimiento_editar" placeholder="Fecha de Nacimiento"
                                    class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rojo-secundario" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-verde-primario" id="btn_modificar">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Exportar -->

<div class="modal fade" id="exportar" tabindex="-1" aria-labelledby="exportarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exportarLabel">EXPORTAR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="includes/procesa_exportar.php" method="post" >
                <div class="input-group">
                    <span class="input-group-text">Fecha Ini  </span>
                    <input type="date" aria-label="inicio" class="form-control" name="inicio" required>
                </div>

                <div class="input-group mt-3">
                    <span class="input-group-text">Fecha Fin</span>
                    <input type="date" aria-label="termino" class="form-control" name="fin" required>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-rojo-secundario" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-verde-primario" id="btn_filtrar">Filtrar</button>
                </div>
            </form>

            </div>

        </div>
    </div>
</div>