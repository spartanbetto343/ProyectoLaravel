<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Folio</th>
	<th>Nombre Empresa</th>
	<th>Direccion</th>
	<th>RFC</th>
	<th>Periodo</th>
	<th>Fecha de Pago</th>
	<th>Nombre del Empleado</th>
	<th>CURP</th>
	<th>Tipo de Pago</th>
	<th>Salario Normal</th>
	<th>Salario por Hora</th>
	<th>Horas Trabajadas</th>
	<th>ISR</th>
	<th>IMMS</th>
	<th>Total de Deducciones</th>
	<th>Neto Recibido</th>
	<th>Folio Fiscal</th>
	<th>Cuenta Deposito</th>
	<th>Id de Empleado</th>


<?php

	require '../conexion.php';
	$codigo = $_GET['nomina'];
	$sql = "SELECT * FROM recibo_nomina WHERE folio=$codigo";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['folio']."</td>";
		echo "<td>". $fila['nombre_empresa']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['rfc']."</td>";
		echo "<td>". $fila['periodo']."</td>";
		echo "<td>". $fila['fecha_pago']."</td>";
		echo "<td>". $fila['nombre_empleado']."</td>";
		echo "<td>". $fila['curp']."</td>";
		echo "<td>". $fila['tipo_pago']."</td>";
		echo "<td>". $fila['salario_normal']."</td>";
		echo "<td>". $fila['salario_hora']."</td>";
		echo "<td>". $fila['horas_trabajadas']."</td>";
		echo "<td>". $fila['isr']."</td>";
		echo "<td>". $fila['imms']."</td>";
		echo "<td>". $fila['total_deducciones']."</td>";
		echo "<td>". $fila['neto_recibido']."</td>";
		echo "<td>". $fila['folio_fiscal']."</td>";
		echo "<td>". $fila['cuenta_deposito']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>