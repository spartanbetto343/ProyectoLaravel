<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css_tablas/estilosTablas.css">
	<meta charset="UTF-8">
	<title>Empleados</title>
</head>
<body>
<table>
	
	<th>Nombre del Solicitante</th>
	<th>Direccion</th>
	<th>Email</th>
	<th>Telefono</th>
	<th>Fecha</th>
	<th>Certificado o Titulo</th>
	<th>Nombre de la Institucion</th>
	<th>Fecha de estudios</th>
	<th>Duracion de Estudios</th>
	<th>Idiomas</th>
	<th>Datos de Interes</th>
	<th>Nivel de Conocimiento</th>
	<th>Conocimiento de Aplicaciones</th>
	<th>Puestos</th>
	<th>Nombre de la Empresa</th>
	<th>Duracion de Puesto</th>
	<th>Especialidad</th>
	<th>Numero de Archivo</th>
	<th>Id del empleado</th>


<?php

	require '../conexion.php';
	$codigo = $_GET['curriculum'];
	$sql = "SELECT * FROM curriculum WHERE nomb_solicitante='$codigo'";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>". $fila['nomb_solicitante']."</td>";
		echo "<td>". $fila['direccion']."</td>";
		echo "<td>". $fila['email']."</td>";
		echo "<td>". $fila['telefono']."</td>";
		echo "<td>". $fila['fecha']."</td>";
		echo "<td>". $fila['cert_titulo']."</td>";
		echo "<td>". $fila['nom_institucion']."</td>";
		echo "<td>". $fila['fecha_estudios']."</td>";
		echo "<td>". $fila['duracion_estudios']."</td>";
		echo "<td>". $fila['idiomas']."</td>";
		echo "<td>". $fila['datos_interes']."</td>";
		echo "<td>". $fila['nivel_conocimiento']."</td>";
		echo "<td>". $fila['con_aplicaciones']."</td>";
		echo "<td>". $fila['puestos']."</td>";
		echo "<td>". $fila['nomb_empresa']."</td>";
		echo "<td>". $fila['durac_puesto']."</td>";
		echo "<td>". $fila['especilidad']."</td>";
		echo "<td>". $fila['n_archivo']."</td>";
		echo "<td>". $fila['id_empleado_empleado']."</td>";
		echo "</tr>";


	}

?>
</table>

</body>
</html>