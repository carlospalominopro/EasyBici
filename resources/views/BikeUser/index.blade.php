
                    

<!DOCTYPE html>
<html>

    @include('layouts.app')

    @include('Layouts/bootstrap')



    {!! Html::style('css/app.css') !!}

<head>
    
<title>Manipulación de registros</title>



    

</head>

<body>

<div class="container" style="margin-left: 35em">
    

<button onclick="window.location.href='{!! url('BikeUser/update') !!}'" type="button" id="btn" class="btn btn-success">Editar</button>

    <button onclick="window.location.href='{!! url('BikeUser/destroy') !!}'" type="button" id="btn" class="btn btn-danger">Eliminar</button>



</div>

</body>
</html>



