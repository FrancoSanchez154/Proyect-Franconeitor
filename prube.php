<?php
$id_usuario = $_GET['titulo_post'];
include 'conexion.php';
$query=mysqli_query($con, "SELECT * FROM post WHERE titulo_post='$id_usuario'");
while ($fila=mysqli_fetch_array($query)){
	echo $fila['titulo_post'];
	echo $fila['num_pag_post'];
	echo $fila['medidas_post'];
	echo $fila['editorial'];
	echo $fila['tapa_post'];
	echo $fila['reseña_post'];
	echo $fila['fecha_publicacion'];
	echo '<img src="'.$fila['imagen_post'].'">';

}
