<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Mobiliarios</title>
</head>
<body>
<table>
	
	<th>codigo</th>
	<th>tipo </th>
	<th>id_empleado </th>
	<th>fecha_compra </th>
	<th>marca </th>
	<th>color </th>
	<th>tamano </th>
	<th>almacenamiento </th>
	<th>placa_madre </th>
	<th>ram </th>
	<th>procesador </th>
	<th>monitor </th>
	<th>teclado </th>
	<th>mouse </th>


<?php

	require '../conexion.php';
	$sql = "SELECT * FROM mobiliario";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['codigo']."</td>";
		echo "<td>". $fila['tipo']."</td>";
		echo "<td>". $fila['id_empleado']."</td>";
		echo "<td>". $fila['fecha_compra']."</td>";
		echo "<td>". $fila['marca']."</td>";
		echo "<td>". $fila['color']."</td>";
		echo "<td>". $fila['tamano']."</td>";
		echo "<td>". $fila['almacenamiento']."</td>";
		echo "<td>". $fila['placa_madre']."</td>";
		echo "<td>". $fila['ram']."</td>";
		echo "<td>". $fila['procesador']."</td>";
		echo "<td>". $fila['monitor']."</td>";
		echo "<td>". $fila['teclado']."</td>";
		echo "<td>". $fila['mouse']."</td>";
		echo "</td>";


	}

?>
</table>

</body>
</html>