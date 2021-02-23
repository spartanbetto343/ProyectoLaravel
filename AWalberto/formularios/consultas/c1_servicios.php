<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Numero de Servicio</th>
	<th>Tipo</th>
	<th>Precio</th>
	<th>Metodo de Pago</th>
	<th>Clave de Empresa</th>

<?php

	require '../conexion.php';
	$codigo = $_GET['servicio'];
	$sql = "SELECT * FROM servicio WHERE n_servicio=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['n_servicio']."</td>";
		echo "<td>". $fila['tipo']."</td>";
		echo "<td>". $fila['precio']."</td>";
		echo "<td>". $fila['metodo_pago']."</td>";
		echo "<td>". $fila['clave_empresa']."</td>";
		echo "</tr>";
	}

?>
</table>

</body>
</html>