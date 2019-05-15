<!DOCTYPE html>
<html>
<head>

	@include('Layouts/bootstrap')

	{!! Html::style('css/Diseño.css') !!}
	{!! Html::style('css/Diseño2.css') !!}

	<title>Asignación QR</title>
</head>
<body>

	@if($validar == 1)

		<script type="text/javascript">
			
			alert("Error de Registro");

		</script>

	@else

		<script type="text/javascript">
			
			alert("Registro satisfactorio");

		</script>

		<script>
		
			function inicio(enla) {
			 	window.location='/EasyBici/public';
			}

		</script>
			
		<header class="header">

			<div class="menu">				
						
				<div class="logo">

					<a href="#"><i class="fas fa-bicycle"></i> Registro de Bici</a>

				</div>

				<nav class="nav">
					
				</nav>

				
				<div class="social">
					
					<div> 	
							<a href="{!! url('Login') !!}"><i class="fas fa-toolbox"></i> ADMIN  </a> 

					</div>
				</div>
		
			</div>
		</header>
			
		@php

			$codigo=$id;

			@include('../phpqrcode/qrlib.php');

			$dir='temp/';

			$imagen=$dir."$codigo".".png";

			$tamano=10;
			$level='H';
			$frameSize=0;
			$contenido=$codigo;
			QRcode::png($contenido,$imagen,$level,$tamano,$frameSize);
			echo "<img class='' src='$imagen'>";
			
			echo ' 

			

			';

		@endphp

		


	<div class="Titulo1"> 

			<label class="labele" for="id" >Te hemos asignado un Código QR,<br> guardalo para futuros ingresos</label> 

				<form class="Formulario" name="formulario_registro" action="" method="POST">
					
					<!--<div class="ImagenQR">-->
			
						<?php 

						echo "<br><br><a href='temp/$codigo".".png' download='CodigoQR.png' onclick='inicio(this);'>Descargar</a>";

		 				?>
						
				</form>

		


	</div>

	@endif

</body>
</html>