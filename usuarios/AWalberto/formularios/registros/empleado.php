

<?php

require 'conexion.php';
$id_empleado = $_GET['id'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];
$sueldo = $_GET['sueldo'];
$puesto = $_GET['puesto'];
$sucursal = $_GET['sucursal'];
$curp = $_GET['curp'];
$rfc = $_GET['rfc'];
$telefono = $_GET['telefono'];
$titulo = $_GET['titulo'];
$cedula = $_GET['cedula'];
$mobiliario = $_GET['mobiliario'];
$empresa = $_GET['empresa'];
$sql = "INSERT INTO empleado VALUES ($id_empleado,'$nombre','$apellidos', '$direccion','$email',$sueldo,'$puesto','$sucursal','$curp','$rfc',$telefono,'$titulo',$cedula,$mobiliario,$empresa)";

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