<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Minuta</th>
	<th>Numero de Proyecto</th>
	<th>Alcances</th>
	<th>Implicaciones</th>
	<th>Desiciones</th>
	<th>Id del empleado</th>

<?php

	require '../conexion.php';
	$sql = "SELECT * FROM minuta";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_minuta']."</td>";
		echo "<td>". $fila['n_proyecto']."</td>";
		echo "<td>". $fila['alcances']."</td>";
		echo "<td>". $fila['implicaciones']."</td>";
		echo "<td>". $fila['desiciones']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>