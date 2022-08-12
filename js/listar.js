$(document).ready(function () {
  
    lista_mascotas = $('#lista_mascotas').DataTable({
      "order": [[ 0, "desc"]],
      "ajax": {
        "url": "includes/procesa_listar.php",
        "method": 'POST',
        "data": {},
        "dataSrc": ""
      },
  
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
      },
  
      "columns": [{
          "data": "id"
        },
        {
          "data": "nombre"
        },
        {
          "data": "edad"
        },
        {
          "data": "fecha"
        },
        {
          "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-warning btn_editar'><i class='bi bi-pencil-square'></i></button> <button class='btn btn-danger btn_eliminar'><i class='bi bi-trash'></i></button></div></div>"
        
        }
      ]
  
    });
  
  });