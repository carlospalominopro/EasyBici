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


@foreach($estudiante as $st)

@php

	echo "<pre>";
	print_r($st);


@endphp


@endforeach



<div class="tables">

<table id="table_id" class="display tables2">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>

    	@for($i=0; $i<10; $i++)



        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row x Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row d Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2sf Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row fafjashfafd Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>

        @endfor
    </tbody>
</table>

</div>

</body>
</html>

