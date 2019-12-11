$(document).ready(function () {
    $('#modal1').modal();

    $('#btn-modal').on('click', function () {
        $('#modal1').show();
    });

    $('#tablaUsuario').DataTable( {
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        iDisplayLength: 50,
        "language": {
            "sLengthMenu":     "Mostrar _MENU_ usuarios",
            "sInfo":           "Mostrando usuarios del _START_ al _END_ de  _TOTAL_ usuarios",
            "sSearch":         "Buscar:",
            "oPaginate": {
                "sNext":     ">",
                "sPrevious": "<"
            },
        }
        
    } );
    $('#btn-save').on('click', function () {
        
        $('#form-usuarios').submit();

                   
    });
});