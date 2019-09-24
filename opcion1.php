<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
	<div class="preview" id="opcion1">
		<form name="publicaciones" method="POST" action="validarpublicaciones.php" enctype="multipart/form-data">
			<label> TITULO</label>
			<input type="text" name="titulo" required>
			<br />
			<label>Seleccione las imagenes</label>
			<input type="file" name="imagen" required>
			<br />
			<input type="submit" name="publicar" value="publicar">


		</form>




	</div>

</body>
</html>