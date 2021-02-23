<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Contrato</th>
	<th>Tipo</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Nombre de la Empresa</th>
	<th>Direccion Empresa</th>
	<th>Fecha</th>
	<th>Duracion del Contrato</th>
	<th>Numero de Archivo</th>
	<th>Tipo de Servicio</th>
	<th>Monto a Pagar</th>
	<th>Sueldo Minimo</th>
	<th>Sueldo Maximo</th>
	<th>Puesto</th>
	<th>Duracion de Prueba</th>
	<th>Vacaciones</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$sql = "SELECT * FROM contrato";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_contrato']."</td>";
		echo "<td>". $fila['tipo']."</td>";
		echo "<td>". $fila['nombre']."</td>";
		echo "<td>". $fila['apellido']."</td>";
		echo "<td>". $fila['nombre_empresa']."</td>";
		echo "<td>". $fila['direccion_empresa']."</td>";
		echo "<td>". $fila['fecha']."</td>";
		echo "<td>". $fila['duracion_contrato']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['tipo_servicio']."</td>";
		echo "<td>". $fila['monto_pagar']."</td>";
		echo "<td>". $fila['sueldo_min']."</td>";
		echo "<td>". $fila['sueldo_max']."</td>";
		echo "<td>". $fila['puesto']."</td>";
		echo "<td>". $fila['duracion_prueba']."</td>";
		echo "<td>". $fila['vacaciones']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";
	}

?>
</table>

</body>
</html>