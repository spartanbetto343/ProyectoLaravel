


<?php 
require 'conexion.php';
$codigo = $_GET['codigo'];
$mobiliario = $_GET['mobiliario'];
$id_empleado = $_GET['id_empleado'];
$fecha = $_GET['fecha'];
$marca = $_GET['marca'];
$color = $_GET['color'];
$tamano = $_GET['tamano'];
$almacenamiento = $_GET['almacenamiento'];
$placa = $_GET['placa'];
$ram = $_GET['ram'];
$procesador = $_GET['procesador'];
$monitor = $_GET['monitor'];
$teclado = $_GET['teclado'];
$mouse = $_GET['mouse'];
$sql = "INSERT INTO mobiliario VALUES ($codigo,'$mobiliario',$id_empleado,'$fecha','$marca','$color','$tamano','$almacenamiento','$placa','$ram','$procesador','$monitor','$teclado','$mouse')";

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