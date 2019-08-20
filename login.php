<!DOCTYPE html>
<html>
<head>
	<title>Gestor de usuarios</title>
</head>
<body>

<h1>Inicio de Sesion</h1>

	<h3>Coloque los datos solicitados!!</h3>

	<form method="post" action="validar_usuario.php" id="alta">
		<p>Nombre</p>
		<p><input type="text" name="nombre" id="nombre"></p>
		<p>Clave</p>
		<p><input type="password" name="clave" id="clave"></p>

		<p><button type="submit">Enviar</button></p>
	</form>
