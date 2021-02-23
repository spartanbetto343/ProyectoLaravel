<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Servicios</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos nevegacion/manu.css">
	<style>
		body
		{
			position: relative;
		}
		div
		{
			position: relative;
		}
		nav
		{
			position: relative;
		}
		.texto
		{
			text-align: justify;
		}
	</style>
</head>
<body>
	<header>
		<div class="menu">
			<p><img src="../../AWalberto/imagenes/logodata.png" height="75px" width="150px"></p>
		<nav>
			<ul>
				<li><a href="../AWalberto/Pagina inicio.html">Inicio</a></li>
				<li><a href="../AWalberto/Quienes Somos.html">Empresa</a></li>
				<li><a href="../AWalberto/Mision.html">Misión</a></li>
				<li><a href="../AWalberto/Vision.html">Visión</a></li>
				<li><a href="../AWalberto/Contactanos.html">Contactanos</a></li>
				<li><a href="index.php">Servicios</a></li>
				<li><a href="../AWalberto/Mi Curriculum.html">Desarrollador</a></li>
			</ul>
		</nav>
		</div>
	</header>

	<?php 

	$id = $_GET['nombre']; 
	$conexion = new mysqli('localhost', 'root', '', 'datavoice');
	$sql = "SELECT imagen, info, titulo FROM fotos WHERE imagen='$id'";
	$resultado = $conexion->query($sql);


	while($fila = $resultado->fetch_assoc())
	{
		$imagen = $fila['imagen'];
		$titulo = $fila['titulo'];
		$texto = $fila['info'];

		echo  <<< EOT
		<header>
		<div class="contenedor">
			<h1 class="titulo">$titulo</h1>
		</div>
		</header>
		<div class="contenedor">
			<div class="foto">
				<img src="$imagen">
				<p class="texto">$texto</p>
				<a href="index.php" class="regresar"> <i class="fa fa-long-arrow-left"></i>Regresar</a>
			</div>
		</div>
		EOT;
	}
	?>
</body>
</html>