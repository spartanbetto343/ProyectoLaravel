<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Id de empleado</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Direccion</th>
	<th>Email</th>
	<th>Sueldo</th>
	<th>Puesto</th>
	<th>Sucursal</th>
	<th>CURP</th>
	<th>RFC</th>
	<th>Telefono</th>
	<th>Certificado o titulo</th>
	<th>Cedula profesional</th>
	<th>Codigo del mobiliario</th>
	<th>Clave Empresa</th>


<?php

	require '../conexion.php';
	$sql = "SELECT * FROM empleado";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['id_empleado']."</td>";
		echo "<td>". $fila['nombre']."</td>";
		echo "<td>". $fila['apellido']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['email']."</td>";
		echo "<td>". $fila['sueldo']."</td>";
		echo "<td>". $fila['puesto']."</td>";
		echo "<td>". $fila['sucursal']."</td>";
		echo "<td>". $fila['curp']."</td>";
		echo "<td>". $fila['rfc']."</td>";
		echo "<td>". $fila['telefono']."</td>";
		echo "<td>". $fila['cert_titulo']."</td>";
		echo "<td>". $fila['ced_profesional']."</td>";
		echo "<td>". $fila['codigo_mobilario']."</td>";
		echo "<td>". $fila['clave_empresa']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>