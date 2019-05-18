
<!DOCTYPE html>
<html>

    @include('Layouts.app')

    @include('Layouts/bootstrap')



    {!! Html::style('css/app.css') !!}

<head>
    


    <title>LOGIN ADMIN</title>

    

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
    
    
        </tbody>
    </table>

    
    <button onclick="window.location.href='{!! url('BikeUser') !!}'" type="button" id="btn" class="btn btn-success">Manipulación de registros</button>


</div>

</body>
</html>


<script src="datatable.js" type="text/javascript" charset="utf-8"></script>



