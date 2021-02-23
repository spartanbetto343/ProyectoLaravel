<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de test</th>
	<th>Nombre del cliente</th>
	<th>Fecha</th>
	<th>Necesidades</th>
	<th>Tipo de Servicio</th>
	<th>Requerimientos</th>
	<th>Solucion</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$codigo = $_GET['test'];
	$sql = "SELECT * FROM test_necesidades WHERE n_test=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_test']."</td>";
		echo "<td>". $fila['nombre_cliente']."</td>";
		echo "<td>". $fila['fecha']."</td>";
		echo "<td>". $fila['necesidades']."</td>";
		echo "<td>". $fila['tipo_servicio']."</td>";
		echo "<td>". $fila['requerimientos']."</td>";
		echo "<td>". $fila['solucion']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>