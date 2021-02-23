<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Manual</th>
	<th>Autor</th>
	<th>Servicio</th>
	<th>Cliente</th>
	<th>Titulo</th>
	<th>Numero de Archivo</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$codigo = $_GET['manual'];
	$sql = "SELECT * FROM manual_usuario WHERE n_manual=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_manual']."</td>";
		echo "<td>". $fila['autor']."</td>";
		echo "<td>". $fila['servicio']."</td>";
		echo "<td>". $fila['cliente']."</td>";
		echo "<td>". $fila['titulo']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>