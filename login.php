<?php
	session_start();

	if(empty($_POST['entrar']))
	{
	//conexion a la BASE
	mysql_connect ("localhost", "root","15709595hola");
	mysql_select_db ("cuentas_registradas");

	//buscar en los registros Y COMPARARRAARAR
	$sql="SELECT * FROM cuentas WHERE usuario_name='". $_POST ['usuario']."' AND usuario_clave='". $_POST['password']."' ";
	$res=mysql_query($sql);
	$num=mysql_num_rows($res);

	//SE FIJA SI HAY ALGUN REGISTRO
	if($num=0)
	{
		//CREAR SESION CON LA ID DEL USUARIO
		$row=mysql_fetch_array($res);
		 
		$_SESSION['osu_id']=$row['id_usuario'];

		//Redireccion al login
		header("Location:login.php");
	
		}
	}

?>




<html>

<html img=es>
<head>
	<meta 

</html>