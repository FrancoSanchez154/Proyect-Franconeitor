<?php 
include 'conexion.php';

$titulo=$_REQUEST['titulo'];
$num_pag=$_REQUEST['num_pag'];
$medidas=$_REQUEST['medidas'];
$tapa=$_REQUEST['tapa'];
$editorial=$_REQUEST['editorial'];
$reseña=$_REQUEST['reseña'];
$fecha_publicacion=$_REQUEST['fecha_publicacion'];



$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="images";

$ruta=$ruta."/".$nombreimg;

move_uploaded_file($archivo, $ruta);
$query="INSERT INTO post VALUES('', '".$titulo."','".$num_pag."','".$medidas."','".$tapa."','".$editorial."','".$reseña."','".$fecha_publicacion."','".$ruta."') ";

$consulta = mysqli_query($con, $query);//ERA ESTOOOOO <--------------------

if ($query) {
	echo"instertado piola";
}
else{
	echo "no funcionao";

}



 ?>