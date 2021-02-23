<?php

require 'conexion.php';
$clave = $_GET['clave'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$clave_ent = $_GET['clave_ent'];
$telefono = $_GET['telefono'];

$sql = "INSERT INTO empresa VALUES ($clave,'$nombre','$direccion',$clave_ent,$telefono)";



$conexion->query($sql);

if($conexion->affected_rows>=1)
{
	echo "El registro fue exitoso";
}
else
{
	echo "Error de registro";
}



?>
