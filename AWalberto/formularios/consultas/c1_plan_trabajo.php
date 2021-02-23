<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero</th>
	<th>Titulo</th>
	<th>Numero del Proyecto</th>
	<th>Fecha de Inicio</th>
	<th>Fecha Limite</th>
	<th>Duracion</th>
	<th>Id del empleado</th>
	


<?php

	require '../conexion.php';
	$codigo = $_GET['plan'];
	$sql = "SELECT * FROM plan_trabajo WHERE numero=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['numero']."</td>";
		echo "<td>". $fila['titulo']."</td>";
		echo "<td>". $fila['n_proyecto']."</td>";
		echo "<td>". $fila['fecha_inicio']."</td>";
		echo "<td>". $fila['fecha_limite']."</td>";
		echo "<td>". $fila['duracion']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";
	}

?>
</table>

</body>
</html>