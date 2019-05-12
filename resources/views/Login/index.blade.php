<!DOCTYPE html>
<html>
	



<head>
	
	<title>LOGIN ADMIN</title>

	{!! Html::style('css/app.css') !!}

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

	<link rel="stylesheet" type="text/css" href="public/css/app.css">

	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
	</script>

	<script type="text/javascript" charset="utf-8">
	
	$(document).ready( function() {

    	$('#table_id').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
        }
    } );

	} );


	</script>

</head>



<body>




<div class="tables">

<table id="table_id" class="display tables2">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>

    	@foreach ($estudiante as $key =>$value )
        
    
        <tr>
            <td>{!! $estudiante[$key]->cod_st !!}</td>
            <td>{!! $estudiante[$key]->name_st !!}</td>
            
        </tr>
        
        @endforeach


    </tbody>
</table>

</div>

</body>
</html>

