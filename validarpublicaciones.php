<?php 
include 'conexion.php';

$titulo=$_REQUEST['titulo'];

$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="images";

$ruta=$ruta."/".$nombreimg;

move_uploaded_file($archivo, $ruta);
$query="INSERT INTO post VALUES('', '".$titulo."', '".$ruta."') ";
$consulta = mysqli_query($con, $query);//ERA ESTOOOOO <--------------------

if ($query) {
	echo"instertado piola";
}
else{
	echo "no funcionao";

}



 ?>