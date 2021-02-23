<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Factura</th>
	<th>Fecha de Emision</th>
	<th>Fecha de Vencimiento</th>
	<th>RFC</th>
	<th>Concepto</th>
	<th>Importe</th>
	<th>Nombre del Cliente</th>
	<th>Direccion</th>
	<th>Nombre de la Empresa</th>
	<th>Clave de Empresa</th>
	<th>Numero de Archivo</th>
	<th>Id del Empleado</th>
	<th>Id del Cliente</th>

<?php

	require '../conexion.php';
	$codigo = $_GET['factura'];
	$sql = "SELECT * FROM factura WHERE n_factura=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_factura']."</td>";
		echo "<td>". $fila['fecha_emision']."</td>";
		echo "<td>". $fila['fecha_vencimiento']."</td>";
		echo "<td>". $fila['rfc']."</td>";
		echo "<td>". $fila['concepto']."</td>";
		echo "<td>". $fila['importe']."</td>";
		echo "<td>". $fila['nombre_cliente']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['nombre_empresa']."</td>";
		echo "<td>". $fila['clave_empresa']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "<td>". $fila['id_cliente_cliente']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>