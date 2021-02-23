

<?php


require 'conexion.php';
$numero = $_GET['numero'];
$proyecto = $_GET['proyecto'];
$personal = $_GET['personal'];
$perfil = $_GET['perfil'];
$software = $_GET['software'];
$hardware = $_GET['hardware'];
$credenciales = $_GET['credenciales'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$sql = "INSERT INTO analisis_recursos_necesarios VALUES($numero,$proyecto,$personal,'$perfil','$software','$hardware','$credenciales',$archivo,$empleado)";


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