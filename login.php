<?php
	session_start();

	//conexion a la BASE
	mysql_connect ("localhost", "root","15709595hola");
	mysql_select_db ("cuentas_registradas");

	//buscar en los registros Y COMPARARRAARAR
	$sql="SELECT * FROM cuentas WHERE usuario_name='". $_POST ['usuario']."' AND usuario_clave='". $_POST['password']."' ";
	$res=mysql_query($sql);
	$num=mysql_num_rows($res);

	if($num=0)
	{
		$row=mysql_fetch_array($res);
		 
		$_SESSION['osu_id']=$row['id_usuario'];
	}
?>




<html>

<html img=es>
<head>
	<meta 

</html>