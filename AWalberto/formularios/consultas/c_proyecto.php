<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Documentacion</th>
	<th>Numero del Proyecto</th>
	<th>Nombre dle Cliente</th>
	<th>Apellido</th>
	<th>Fecha de Elaboracion</th>
	<th>Problematica</th>
	<th>Numero de Archivo</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$sql = "SELECT * FROM proyecto_documentado";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_documentacion']."</td>";
		echo "<td>". $fila['n_proyecto']."</td>";
		echo "<td>". $fila['nombre_cliente']."</td>";
		echo "<td>". $fila['apellido']."</td>";
		echo "<td>". $fila['fecha_elaboracion']."</td>";
		echo "<td>". $fila['problematica']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";
	}

?>
</table>

</body>
</html>