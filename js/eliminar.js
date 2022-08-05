$(document).ready(function () {

    $('.btn_eliminar').click(function () {

        fila    = $(this).closest("tr");
        id      = parseInt(fila.find('td:eq(0)').text());

        Swal.fire({
            title: '¿Desea eliminar este registro?',
            text: "Estos cambios no podran ser revertidos",
            icon: 'warning',
            showCancelButton: true,
            position: 'top',
            confirmButtonColor: '#26A400',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
      
              $.ajax({
                url: "includes/procesa_eliminar.php",
                type: "POST",
                datatype: "json",
                data: {id},
                success: function () {
      
                  Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Registro eliminado con exito'
                  })
      
                  $("#contenido").load('includes/tabla.php');
      
                }
              });
      
      
            }
      
          })

    });
});