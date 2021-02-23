<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Id de cliente</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Telefono</th>
	<th>Email</th>
	<th>Estado</th>
	<th>Codigo Postal</th>
	<th>Numero de Cuenta</th>
	<th>Entre Calles</th>
	<th>Manzana</th>
	<th>Informacion de Referencia</th>
	<th>Numero de Contrato</th>
	<th>Numero de Servicio</th>


<?php

	require '../conexion.php';
	$sql = "SELECT * FROM cliente";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['id_cliente']."</td>";
		echo "<td>". $fila['nombre']."</td>";
		echo "<td>". $fila['apellido']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['telefono']."</td>";
		echo "<td>". $fila['email']."</td>";
		echo "<td>". $fila['estado']."</td>";
		echo "<td>". $fila['codigo_postal']."</td>";
		echo "<td>". $fila['numero_cuenta']."</td>";
		echo "<td>". $fila['entre_calles']."</td>";
		echo "<td>". $fila['manzana']."</td>";
		echo "<td>". $fila['inf_referencia']."</td>";
		echo "<td>". $fila['n_contrato_contrato']."</td>";
		echo "<td>". $fila['n_servicio_servicio']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>