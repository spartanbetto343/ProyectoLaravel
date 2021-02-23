<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Galería de imagenes</title>
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
		header
		{
			position: relative;
		}
		nav
		{
			position: relative;
		}
		table
		{
			position: relative;
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


	<table>
	<?php 
	$conexion = new mysqli('localhost', 'root', '', 'datavoice');
	$sql = "SELECT imagen, texto, titulo FROM fotos";
	$resultado = $conexion->query($sql);

	while($fila = $resultado->fetch_assoc())
	{
		$imagen = $fila['imagen'];
		$titulo = $fila['titulo'];
		$texto = $fila['texto'];

		echo  <<< EOT
		<section class="fotos">
			<div class="contenedor">
			<tr>
			<td>
				<div class="thumb">
					<a href="foto.php?nombre=$imagen">
						<img name="$imagen" src="$imagen">
					</a>
					<center><p class="titulo">$titulo</p></center>
				</div>
			</td>
				<td><p class="info">$texto</p></td>
			</tr>
			</div>
		</section>
		EOT;
	}
	?>

	</table>
</body>
</html>