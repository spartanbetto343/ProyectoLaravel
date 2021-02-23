<?php


require 'conexion.php';
$numero = $_GET['numero'];
$proyecto = $_GET['proyecto'];
$alcances = $_GET['alcances'];
$implicaciones = $_GET['implicaciones'];
$desiciones = $_GET['desiciones'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO minuta VALUES ($numero,$proyecto,'$alcances','$implicaciones','$desiciones',$empleado)";



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