<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Informe</th>
	<th>Titulo</th>
	<th>Autor</th>
	<th>Lugar</th>
	<th>Fecha</th>
	<th>Contenido</th>
	<th>Numero de Archivo</th>
	<th>Nombre</th>
	<th>Asunto</th>
	<th>Hora del Entrada</th>
	<th>Salida</th>
	<th>Id del Empleado</th>

<?php

	require '../conexion.php';
	$sql = "SELECT * FROM informe_reporte";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_informe']."</td>";
		echo "<td>". $fila['titulo']."</td>";
		echo "<td>". $fila['autor']."</td>";
		echo "<td>". $fila['lugar']."</td>";
		echo "<td>". $fila['fecha']."</td>";
		echo "<td>". $fila['contenido']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['nombre']."</td>";
		echo "<td>". $fila['asunto']."</td>";
		echo "<td>". $fila['hora_entrada']."</td>";
		echo "<td>". $fila['salida']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";
	}

?>
</table>

</body>
</html>