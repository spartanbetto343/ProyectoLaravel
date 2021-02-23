<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Analisis</th>
	<th>Numero de Proyecto</th>
	<th>Personal Requerido</th>
	<th>Perfil Requerido</th>
	<th>Software Requerido</th>
	<th>Hardware Necesario</th>
	<th>Credenciales</th>
	<th>Numero de Archivo</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$codigo = $_GET['analisis'];
	$sql = "SELECT * FROM analisis_recursos_necesarios WHERE n_analisis=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_analisis']."</td>";
		echo "<td>". $fila['n_proyecto']."</td>";
		echo "<td>". $fila['personal_requerido']."</td>";
		echo "<td>". $fila['perfil_requerido']."</td>";
		echo "<td>". $fila['software_requerido']."</td>";
		echo "<td>". $fila['hardware_necesario']."</td>";
		echo "<td>". $fila['credenciales']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";
	}

?>
</table>

</body>
</html>