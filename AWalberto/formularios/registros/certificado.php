<?php



require 'conexion.php';
$certificado = $_GET['certificado'];
$tipo = $_GET['tipo'];
$nombre = $_GET['nombre'];
$institucion = $_GET['institucion'];
$expedicion = $_GET['expedicion'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO certificado_titulo VALUES($certificado,'$tipo','$nombre','$institucion',$expedicion,$archivo,$empleado)";


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