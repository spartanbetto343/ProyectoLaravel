<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Orden</th>
	<th>Fecha</th>
	<th>Nombre del Cliente</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Tipo de Servicio</th>
	<th>Descripcion de Servicio</th>
	<th>Precio Aproximado</th>
	<th>Forma de Pago</th>
	<th>Numero de Archivo</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$codigo = $_GET['orden'];
	$sql = "SELECT * FROM orden_servicio WHERE n_orden=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_orden']."</td>";
		echo "<td>". $fila['fecha']."</td>";
		echo "<td>". $fila['nombre_cliente']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['telefono']."</td>";
		echo "<td>". $fila['tipo_servicio']."</td>";
		echo "<td>". $fila['descripcion_ser']."</td>";
		echo "<td>". $fila['precio_aprox']."</td>";
		echo "<td>". $fila['forma_pago']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>