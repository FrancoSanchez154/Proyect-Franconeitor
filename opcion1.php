<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
	<div class="preview" id="opcion1">
		<form name="publicaciones" method="POST" action="validarpublicaciones.php" enctype="multipart/form-data">
			<label> TITULO</label>
			<input type="text" autocomplete="off" name="titulo" required>
			<br />
			<label> Cantidad de paginas</label>
			<input type="number" autocomplete="off" name="num_pag" min="1" required>
			<br />
			<label> Medidas</label>
			<input type="text" autocomplete="off" name="medidas" placeholder="example: 13,34 × 20,96" required>cm
			<br />
			<label> Tapa</label>
			<select name="tapa">
				<option value="Tapa blanda">Tapa blanda</option>
				<option value="Tapa dura">Tapa dura</option>

			</select>
			<br />
			<label> Editorial</label>
			<input type="text" autocomplete="off" name="editorial">
			<br />
			<label> Reseña</label>
			<input type="text" autocomplete="off" name="reseña" required>
			<br />
			<label>Fecha de publicacion</label>
			<input type="date" autocomplete="off" name="fecha_publicacion" required>
			<br />

			<label>Seleccione las imagenes</label>
			<input type="file" autocomplete="off" name="imagen" required>
			<br />



			<input type="submit" name="publicar" value="publicar">


		</form>




	</div>

</body>
</html>