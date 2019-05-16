<!DOCTYPE html>

@include('Layouts/bootstrap')

{!! Html::style('css/Diseño.css') !!}
{!! Html::style('css/Diseño2.css') !!}

<head>

	<title>REGISTRA TU  BICI</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<script>
			$(function(){
		       $('#Registro').click(function(){
			   $(this).next('#wrap').slideToggle();
			   $(this).toggleClass('active');          
			   $('#wrap3').hide();
			   $('#wrap2').hide();
			   });
			});
		</script>

		<script>
			$(function(){
		       $('#ConsultaQR').click(function(){

			   $(this).next('#wrap2').slideToggle();
			   $(this).toggleClass('active');

			   $('#wrap3').hide();
			   $('#wrap').hide(); 
			  

			   });
			});
		</script>

		<script>
			$(function(){
		       $('#regisbici').click(function(){

			   $(this).next('#wrap3').slideToggle();
			   $(this).toggleClass('active'); 

			   $('#wrap2').hide();
			   $('#wrap').hide();
			 

			   });
			});
		</script>
	

</head>

<body>
		
	<div class="Padre">
			
			<header class="header">

				<div class="menu">				
								
						<div class="logo">
						</div>

						<nav class="nav">
																					
						</nav>
						<div class="social">
							
							<div> 	
									<a href="{!! url('Login') !!}"><i class="fas fa-toolbox"></i> ADMIN  </a> 

							</div>
						</div>
				
				</div>
	
<div class="TextoPrincipal">
					
	<div class="Contenedor">

	<a  id="Registro" href="#"> <i class="fas fa-plus-circle"></i>   Nuevo Usuario</a>

	<div  id="wrap" class="wrap">


		<form action="{{ url('/registers') }}" class="Formulario" name="formulario_registro" method="post" accept-charset="utf-8">

			<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

			<div>			
		
			<div class="Titulo"> 

			<label class="label" for="id">DATOS DE USUARIO</label> 

			</div>

			<div class="input-group">

			<input type="number" id="id" name="id">
		
			<label class="label" for="id">Codigo Usuario:</label> 			

			</div>			
			
			<div class="input-group">

			<input type="text" id="nombre" name="nombre">

			<label class="label" for="nombre">Nombre:</label> 

			</div>
			
			<div class="input-group">

			<input type="text" id="apellido" name="apellido">

			<label class="label" for="apellido">Apellido:</label> 

		    </div>

			<div class="input-group">
	        
			<input type="email" id="email" name="email">

			<label class="label" for="email">Email   </label> 

	        </div>


			<div class="form-group">

			    <label for="exampleFormControlSelect1" style="color:blue;">Tipo de Usuario</label>

			    	<select class="form-control" id="exampleFormControlSelect1" name="type">

				      <option value="1">{!! $type[0]->name_type!!}</option>
				      <option value="2">{!! $type[1]->name_type!!}</option>
				      <option value="3">{!! $type[2]->name_type!!}</option>
				      <option value="4">{!! $type[3]->name_type!!}</option>

				    </select>	
		  	</div>

        
								
			<div class="input-group radio">
		
				<input type="radio" name="Genero" id="hombre" value="Hombre">

				<label for="hombre">Hombre</label>
			
				<input type="radio" name="Genero" id="Mujer" value="Mujer">

				<label for="Mujer">Mujer</label>
			</div>


			<div class="input-group checkbox">

			<input type="checkbox" name="terminos" id="terminos" c value="true">

			<label for="terminos">Acepto los terminos y condiciones</label>

			</div>

				<input type="submit" id="btn-submit" value="Registrar">
				
			</div>

		</form>

	</div>

	<a id="regisbici" class="Bici" href="#"><i class="fas fa-bicycle"></i> Registro 	de Bici</a>

		<div  id="wrap3" class="wrap3">

		<form action="{{ url('/registersBike') }}" class="Formulario" name="formulario_registro" method="post" accept-charset="utf-8">

			<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

			<div>			
		
			<div class="Titulo"> 

			<label class="label" for="id">Registro de Bici</label> 

			</div>

			<div class="input-group">

			<input type="number" id="id" name="id_bike" required>
		
			<label class="label" for="id">Placa:</label> 			

			</div>			
			
			<div class="input-group">

			<input type="number" id="nombre" name="cod_bu" required>

			<label class="label" for="nombre">Codigo Usuario</label> 

			</div>

			<div class="input-group">

			<input type="text" id="nombre" name="description" required>

			<label class="label" for="description">Descripción:</label> 

			</div>
			
			<div class="input-group">

			<label class="label" for="color" >Color:</label> 

			<input type="color" id="color" name="color" required style="margin-top: 2em; margin-left: 1em">


		    </div>

		    <div class="input-group">
	        
			<input type="text" id="foto" name="foto" required>

			<label class="label" for="foto">Foto URL: </label> 

	        </div>

			<div class="input-group">
	        
			<input type="text" id="marca" name="marca" required>

			<label class="label" for="email">Marca Bici:   </label> 

	        </div>


				<input type="submit" id="btn-submit" value="Registrar Bici">
				
			</div>

		</form>

	</div>

	<script src="formulario.js"></script>


		<a id="ConsultaQR" href="#"> <i class="fas fa-qrcode"></i>  CONSULTA QR  	</a>

		<div  id="wrap2" class="wrap">

		<form action="{{ url('/consulta') }}" class="Formulario" name="formulario_registro" method="post" accept-charset="utf-8">

		<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>


		<div>			
	
		<div class="Titulo"> 

		<label class="label" for="id">CONSULTA QR</label> 

		</div>

					<div class="input-group">

					<label class="labele" for="id">ID:</label> 		

					<input type="number" id="id" name="id" required="">
				
					</div>			
							

			<input type="submit" id="btn-submit" value="Consultar">
			
		</div>

		</form>

			<form class="Formulario" name="formulario_registro" action="" method="POST">
					
					<!--<div class="ImagenQR">
			
							<input type="submit" id="btn-submit" value="Descagar">
			
					</div>-->
					
			</form>

		</div>
</div>
</div>

	</header>

</div>




</body>
</html>
