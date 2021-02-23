<?php 



require 'conexion.php';
$numero = $_GET['numero'];
$nombre = $_GET['nombre'];
$fecha = $_GET['fecha'];
$necesidades = $_GET['necesidades'];
$tipo = $_GET['tipo'];
$requerimientos = $_GET['requerimientos'];
$solucion = $_GET['solucion'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO test_necesidades VALUES($numero,'$nombre','$fecha','$necesidades','$tipo','$requerimientos','$solucion',$empleado)";


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