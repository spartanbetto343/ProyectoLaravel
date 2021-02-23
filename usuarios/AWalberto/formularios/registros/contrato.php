

<?php

require 'conexion.php';
$numero = $_GET['numero'];
$tipo = $_GET['tipo'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$empresa = $_GET['empresa'];
$direccion = $_GET['direccion'];
$direccion = $_GET['fecha'];
$duracion = $_GET['duracion'];
$archivo = $_GET['archivo'];
$servicio = $_GET['servicio'];
$monto = $_GET['monto'];
$minimo = $_GET['minimo'];
$maximo = $_GET['maximo'];
$puesto = $_GET['puesto'];
$prueba = $_GET['prueba'];
$vacaciones = $_GET['vacaciones'];
$id_cliente = $_GET['id_cliente'];
$sql = "INSERT INTO contrato VALUES($numero,'$tipo','$nombre','$apellido','$empresa','$direccion','$direccion','$duracion',$archivo,'$servicio',$monto,'$minimo','$maximo','$puesto','$prueba','$vacaciones',$id_cliente)";


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