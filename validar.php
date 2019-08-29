<?php
 require 'conexion.php';
 
session_start();

$user = $_POST['usuario'];
$pass = $_POST['password'];

$query = "SELECT COUNT(*) as contar FROM `cuentas` WHERE `usuario_name` = '$user' AND `usuario_clave` = '$pass'";

$consulta = mysqli_query($con, $query);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
  
    $_SESSION['autenticado'] = 'si';
    header("location: home.php");
}else{
  echo "datos incorrectos";
}
  ?>
