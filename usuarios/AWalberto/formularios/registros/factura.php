<?php

require 'conexion.php';
$numero = $_GET['numero'];
$fecha = $_GET['fecha'];
$fecha2 = $_GET['fecha2'];
$rfc = $_GET['rfc'];
$concepto = $_GET['concepto'];
$importe = $_GET['importe'];
$cliente = $_GET['cliente'];
$direccion = $_GET['direccion'];
$empresa = $_GET['empresa'];
$clave = $_GET['clave'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$id_cliente = $_GET['id_cliente'];
$sql = "INSERT INTO factura VALUES ($numero,'$fecha','$fecha2','$rfc','$concepto',$importe,'$cliente','$direccion','$empresa',$clave,$archivo,$empleado,$id_cliente)";


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