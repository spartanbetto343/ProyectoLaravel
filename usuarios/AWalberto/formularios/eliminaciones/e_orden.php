<?php

	require '../conexion.php';
	$id = $_GET['orden'];
	$sql = "DELETE FROM orden_servicio WHERE n_orden=$id";


$conexion->query($sql);

if($conexion->affected_rows>=1)
{
	echo '<script language="javascript">alert("La eliminacion se efectuo con exito");window.location.href="eliminar.html"</script>';
}
else
{
	echo '<script language="javascript">alert("Error de eliminacion");window.location.href="eliminar.html"</script>';
}

?>