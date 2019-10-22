<?php
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] != "SI") {
    // no logueado
$link="login.php";
}
else {
    // si logueado
    $long="si";
$link="home.php";

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Publicaciones</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <h1>Publicaciones por dios</h1>
    <!------------ BOTONCITO PARA QE ME MANDE AL LOGIN ------------->
    <input type="submit" value="Crear publicacion" onclick="location='<?php echo $link; ?>'" />
    <!--  -->
    <?php
    include 'conexion.php';
    if (isset($_GET['pagina'])){
    	$inicio = ($_GET['pagina']-1)*10;//numero de publicaciones por pag
    }else{
    	$inicio=0;
    }
    $tx="SELECT * FROM post limit 0,10";//numero de publicaciones por pag
    $query= mysqli_query ($con, $tx);
// ACA TE MUESTRA LOS DATOS DE LA BASE
// TODOS EN UN DIV!!
		while($data=mysqli_fetch_array($query)){
        echo '<div class="post">';
        echo "<br>";
		echo $data['titulo_post'];
        echo "<br>";
        echo $data['num_pag_post'];
        echo "<br>";
        echo $data['medidas_post'];
        echo "<br>";
        echo $data['editorial_post'];
        echo "<br>";
        echo $data['tapa_post'];
        echo "<br>";
        echo $data['reseña_post'];
        echo "<br>";
        echo $data['fecha_publicacion'];
        echo "<br>";
        echo '<img id="imgpost" src="'.$data['imagen_post'].'">';
        echo '</div>';
		}
	 ?>
        <?php 
	$query_total=mysqli_query($con,"SELECT id_post FROM post");
	$total=mysqli_num_rows($query_total);
	$cantidad_paginas=floor($total/10); //numero de publicaciones por pag
	$i=1;
		while($i<=$cantidad_paginas){
			echo '<a href="index.php?pagina='.$i.'">'.$i.'</a>     ';
			$i++;
		}

if ($long=="si") {
  echo "<a href='salir.php'>Cerrar Session</a>";  
}
?>
</body>

</html>