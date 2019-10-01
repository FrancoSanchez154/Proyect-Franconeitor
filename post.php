<!DOCTYPE html>
<html>
<head>
	<title>Publicaciones</title>
</head>
<body>
	<?php 
	include 'conexion.php';

	$query= mysqli_query($con, "SELECT * FROM post");
	while  ($fila = mysqli_fetch_array($query)){
		echo $fila['id_post'];
	}

	 ?>






</body>
</html>