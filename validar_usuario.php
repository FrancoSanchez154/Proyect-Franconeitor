<?php
$con = mysqli_connect("localhost","root","15709595hola","cuentas_registradas");
$nombre = $_POST['nombre'];
$clave = md5($_POST['clave']);
	

	mysqli_query($query = "SELECT * FROM cuentas WHERE usuario_name='".$nombre."' AND usuario_clave ='".$clave."'");
	$q = mysql_query($query);


		if (mysql_result($q, 0)) {
			$result = mysql_query($q, 0);
		}
		echo "Usuario correcto!";

  ?>