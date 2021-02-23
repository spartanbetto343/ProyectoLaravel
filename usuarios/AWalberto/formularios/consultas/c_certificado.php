<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Id de Certificado</th>
	<th>Tipo</th>
	<th>Nombre</th>
	<th>Institucion</th>
	<th>Año de expedicion</th>
	<th>Numero de archivo</th>
	<th>Id del Empleado</th>


<?php

	require '../conexion.php';
	$sql = "SELECT * FROM certificado_titulo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['id_certificado']."</td>";
		echo "<td>". $fila['tipo']."</td>";
		echo "<td>". $fila['nombre']."</td>";
		echo "<td>". $fila['institucion']."</td>";
		echo "<td>". $fila['ano_empedicion']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>