<?php



require 'conexion.php';
$cliente = $_GET['cliente'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$email = $_GET['email'];
$estado = $_GET['estado'];
$codigo = $_GET['codigo'];
$cuenta = $_GET['cuenta'];
$calles = $_GET['calles'];
$manzana = $_GET['manzana'];
$referencia = $_GET['referencia'];
$contrato = $_GET['contrato'];
$servicio = $_GET['servicio'];
$sql = "INSERT INTO cliente VALUES($cliente,'$nombre','$apellido','$direccion',$telefono,'$email','$estado',$codigo,$cuenta,'$calles','$manzana','$referencia',$contrato,$servicio)";

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