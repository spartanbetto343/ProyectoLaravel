

<?php 
require 'conexion.php';
$numero = $_GET['numero'];
$autor = $_GET['autor'];
$servicio = $_GET['servicio'];
$cliente = $_GET['cliente'];
$titulo = $_GET['titulo'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO manual_usuario VALUES($numero,'$autor','$servicio','$cliente','$titulo',$archivo,$empleado)";



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