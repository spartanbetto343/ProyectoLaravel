


<?php

require 'conexion.php';
$numero = $_GET['numero'];
$titulo = $_GET['titulo'];
$autor = $_GET['autor'];
$lugar = $_GET['lugar'];
$fecha = $_GET['fecha'];
$contenido = $_GET['contenido'];
$archivo = $_GET['archivo'];
$nombre = $_GET['nombre'];
$asunto = $_GET['asunto'];
$hora = $_GET['hora'];
$salida = $_GET['salida'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO informe_reporte VALUES($numero,'$titulo','$autor','$lugar','$fecha','$contenido',$archivo,'$nombre','$asunto','$hora','$salida',$empleado)";

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