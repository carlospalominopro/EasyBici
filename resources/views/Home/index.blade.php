<!DOCTYPE html>
<html>

    @include('Layouts/bootstrap')

    {!! Html::style('css/app.css') !!}

<head>
	
	<title>LOGIN ADMIN</title>

	<script type="text/javascript" charset="utf-8">
	
	$(document).ready( function() {

    	$('#table_id').DataTable({
        "language": {
            "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
        }
    } );

        var table = $('#table_id').DataTable();
 
        $('#table_id tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
     
        $('#btn').click( function () {
            table.row('.selected').remove().draw( false );
        } );

	} );

	</script>

</head>

<body>

<div class="container">
    <table id="table_id" class="display table">
    
        <thead>
            <tr class="table-primary">
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Marca bici</th>
                <th>Estado</th>

            </tr>
        </thead>
        <tbody>
    
            @foreach ($user as $key =>$value )
             
            <tr class="table-success" >

                <td>{!! $user[$key]->cod_bu !!}</td>
                <td>{!! $user[$key]->name_bu !!}</td>
                <td>{!! $user[$key]->surname_bu !!}</td>
                <td>{!! $user[$key]->email !!}</td>
                <td>{!! $user[$key]->name_type !!}</td>
                <td>{!! $user[$key]->brand_bike !!}</td>
                <td>{!! $user[$key]->name_status !!}</td>
                
            </tr>
            
            @endforeach
    
            <button type="button" id="btn" class="btn btn-danger">Danger</button>
    
        </tbody>
    </table>
</div>


</body>
</html>

