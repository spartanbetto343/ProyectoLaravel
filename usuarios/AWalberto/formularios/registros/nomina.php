<?php

require 'conexion.php';
$folio = $_GET['folio'];
$empresa = $_GET['empresa'];
$direccion = $_GET['direccion'];
$rfc = $_GET['rfc'];
$periodo = $_GET['periodo'];
$fecha = $_GET['fecha'];
$nombre = $_GET['nombre'];
$curp = $_GET['curp'];
$pago = $_GET['pago'];
$normal = $_GET['normal'];
$hora = $_GET['hora'];
$trabajadas = $_GET['trabajadas'];
$isr = $_GET['isr'];
$imss = $_GET['imss'];
$deducciones = $_GET['deducciones'];
$neto = $_GET['neto'];
$fiscal = $_GET['fiscal'];
$cuenta = $_GET['cuenta'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO recibo_nomina VALUES ($folio,'$empresa','$direccion','$rfc','$periodo','$fecha','$nombre','$curp','$pago bancario',$normal,$hora,$trabajadas,$isr,$imss,$deducciones,$neto,'$fiscal','$cuenta',$empleado)";



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