<!DOCTYPE html>
<html>
<head>

	<title>Registro Bici</title>
</head>
<body>

	@if($validar == 0)

		<script type="text/javascript">
			
			alert("Error, No existe usuario registrado");

		</script>

	@else

		<script type="text/javascript">
			
			alert("Registro satisfactorio");
			window.location='index.php';

		</script>
							

	@endif

</body>
</html>