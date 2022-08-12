$(document).ready(function () {

    $(document).on("click", ".btn_editar", function () {

        fila    = $(this).closest("tr");
        id      = parseInt(fila.find('td:eq(0)').text());

        $('#id_editar').val(id);

        console.log(id);

        $.ajax({
            type: "POST",
            url: "includes/procesa_cargar.php",
            data: {
                id
            },

            success: function (respuesta) {

                data = JSON.parse(respuesta);

                $('#nombre_editar').val(data.nombre);
                $('#edad_editar').val(data.edad);
                $('#fecha_nacimiento_editar').val(data.fecha);
                $('#editar').modal('show');

            }

        });

    });


    //---------------------------------------------------------------------------------------------------

    $('#btn_modificar').click(function () {

        var id                      = $("#id_editar").val();
        var nombre                  = $("#nombre_editar").val();
        var edad                    = $("#edad_editar").val();
        var fecha_nacimiento_editar = $("#fecha_nacimiento_editar").val();


        if (nombre == "" ||
            edad == "" ||
            fecha_nacimiento_editar == "") {

            Swal.fire({
                icon: 'error',
                title: 'FALTA ALGO',
                position: 'top',
                allowOutsideClick: false,
                text: 'RELLENE TODOS LOS CAMPOS'
            })

        } else {
            $.ajax({
                type: "POST",
                url: "includes/procesa_actualizar.php",
                data: {
                    id,
                    nombre,
                    edad,
                    fecha_nacimiento_editar

                },

                success: function (a) {

                    console.log(a);

                    if (a == 1) {

                        Swal.fire({
                            title: 'AVISO',
                            position: 'top',
                            allowOutsideClick: false,
                            text: "Registro Actualizado Correctamente",
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                lista_mascotas.ajax.reload(null, false);
                                $('#editar').modal('hide');

                            }

                        })

                        return false;

                    } else {

                        Swal.fire({
                            icon: 'error',
                            position: 'top',
                            allowOutsideClick: false,
                            title: 'Registro no Actualizado',
                            text: 'Verifique algun caracter no valido en los campos'
                        })

                        return false;

                    }

                }

            });

        }

    });

});