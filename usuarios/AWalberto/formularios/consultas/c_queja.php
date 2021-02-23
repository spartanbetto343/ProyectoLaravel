<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Formulario</th>
	<th>Nombre del Cliente</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Nombre del Contacto</th>
	<th>Cargo de Contacto</th>
	<th>Tipo de Servicio</th>
	<th>Detalles de Reclamo</th>
	<th>Solucion</th>
	<th>Fecha</th>
	<th>Numero de Factura</th>
	<th>Numero de Archivo</th>
	<th>Id del Empleado</th>
	<th>Id del Cliente</th>

<?php

	require '../conexion.php';
	$sql = "SELECT * FROM formulario_queja";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_formulario']."</td>";
		echo "<td>". $fila['nombre_cliente']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['telefono']."</td>";
		echo "<td>". $fila['nomb_contacto']."</td>";
		echo "<td>". $fila['cargo_contacto']."</td>";
		echo "<td>". $fila['tipo_servicio']."</td>";
		echo "<td>". $fila['detalles_reclamo']."</td>";
		echo "<td>". $fila['solucion']."</td>";
		echo "<td>". $fila['fecha']."</td>";
		echo "<td>". $fila['n_factura']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "<td>". $fila['id_cliente_cliente']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>