
<?php 


require 'conexion.php';
$numero = $_GET['numero'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$contacto = $_GET['contacto'];
$cargo = $_GET['cargo'];
$tipo = $_GET['tipo'];
$detalles = $_GET['detalles'];
$solucion = $_GET['solucion'];
$fecha = $_GET['fecha'];
$factura = $_GET['factura'];
$archivo = $_GET['archivo'];
$empleado = $_GET['empleado'];
$cliente = $_GET['cliente'];
$sql = "INSERT INTO formulario_queja VALUES($numero,'$nombre','$direccion',$telefono,'$contacto','$cargo','$tipo','$detalles','$solucion','$fecha',$factura,$archivo,$empleado,$cliente)";


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