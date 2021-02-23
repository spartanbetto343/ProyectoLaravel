

<?php

require 'conexion.php';
$numero = $_GET['numero'];
$proyecto = $_GET['proyecto'];
$cliente = $_GET['cliente'];
$apellido = $_GET['apellido'];
$fecha = $_GET['fecha'];
$problematica = $_GET['problematica'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO proyecto_documentado VALUES($numero,$proyecto,'$cliente','$apellido','$fecha','$problematica',$archivo,$empleado)";


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