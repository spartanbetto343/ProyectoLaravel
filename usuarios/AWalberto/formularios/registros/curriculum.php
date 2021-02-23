

<?php 

require 'conexion.php';
$solicitante = $_GET['solicitante'];
$direccion = $_GET['direccion'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$fecha = $_GET['fecha'];
$titulo = $_GET['titulo'];
$institucion = $_GET['institucion'];
$fecha2 = $_GET['fecha2'];
$duracion = $_GET['duracion'];
$idioma = $_GET['idioma'];
$datos = $_GET['datos'];
$nivel = $_GET['nivel'];
$aplicacion = $_GET['aplicacion'];
$puestos = $_GET['puestos'];
$empresa = $_GET['empresa'];
$duracion2 = $_GET['duracion2'];
$especialidad = $_GET['especialidad'];
$archivo = $_GET['archivo'];
$id_empleado = $_GET['id_empleado'];
$sql = "INSERT INTO curriculum VALUES ('$solicitante','$direccion','$email',$telefono,'$fecha','$titulo','$institucion','$fecha2','$duracion','$idioma','$datos','$nivel','$aplicacion','$puestos','$empresa','$duracion2','$especialidad',$archivo,$id_empleado)";

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