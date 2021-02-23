<?php


require 'conexion.php';
$numero = $_GET['numero'];
$tipo = $_GET['tipo'];
$precio = $_GET['precio'];
$pago = $_GET['pago'];
$clave = $_GET['clave'];
$sql = "INSERT INTO servicio VALUES($numero,'$tipo',$precio,'$pago',$clave)";


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