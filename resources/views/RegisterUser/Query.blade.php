<!DOCTYPE html>
<html>
<head>
	@include('Layouts/bootstrap')

	{!! Html::style('css/Diseno.css') !!}
	{!! Html::style('css/Diseno2.css') !!}

	<title>Consulta QR</title>


</head>
<body>

	@if($validar == 0)

		<script type="text/javascript">
			
			alert("Error de Registro");
			window.history.back();

		</script>

	@else

		<script type="text/javascript">
			
			alert("QR ENCONTRADO");

		</script>

	<header class="header">

			<div class="menu">				
						
				<div class="logo">

					<a href=""><i class="fas fa-bicycle"></i> Registro de Bici</a>

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

			<label class="labele" for="id" >TU CÓDIGO QR</label> 

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