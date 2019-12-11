$(document).ready(function () {
    $('#modal1').modal();

    $('#btn-modal').on('click', function () {
        $('#modal1').show();
    });
    
    $('#tablaEmpresa').DataTable( {
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        iDisplayLength: 50,
        "language": {
            "sLengthMenu":     "Mostrar _MENU_ empresas",
            "sInfo":           "Mostrando empresas del _START_ al _END_ de  _TOTAL_ empresas",
            "sSearch":         "Buscar:",
            "oPaginate": {
                "sNext":     ">",
                "sPrevious": "<"
            },
        }
        
    } );
    $('#btn-save').on('click', function () {
        
               
        $('#form-empresas').submit();

                   
    });
});