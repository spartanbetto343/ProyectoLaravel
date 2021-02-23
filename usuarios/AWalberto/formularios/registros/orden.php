<?php 


require 'conexion.php';
$orden = $_GET['orden'];
$fecha = $_GET['fecha'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$tipo = $_GET['tipo'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$forma = $_GET['forma'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO orden_servicio VALUES ($orden,'$fecha','$nombre','$direccion',$telefono,'$tipo','$descripcion',$precio,'$forma',$archivo,$empleado)";

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