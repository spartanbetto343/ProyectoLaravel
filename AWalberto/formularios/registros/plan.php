<?php


require 'conexion.php';
$numero = $_GET['numero'];
$titulo = $_GET['titulo'];
$proyecto = $_GET['proyecto'];
$fecha = $_GET['fecha'];
$fecha2 = $_GET['fecha2'];
$duracion = $_GET['duracion'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO plan_trabajo VALUES($numero,'$titulo',$proyecto,'$fecha','$fecha2','$duracion',$empleado)";


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