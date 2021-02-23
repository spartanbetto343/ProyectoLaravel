<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Galería de imagenes</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Registro de Servicio</h1>
		</div>
	</header>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" class="formulario" name="formulario" enctype = "multipart/form-data">
		<label for="foto"> Selecciona la foto</label>
		<input type="file" name="foto" id="foto">
		<label for="titulo">Título de la foto</label>
		<input type="text" name="titulo" id="titulo">
		<label for="texto">Dirección</label>
		<textarea name="texto" id="texto" placeholder="Ingresa la descripción"></textarea>
		<label for="info">Información Adicional</label>
		<textarea name="info" id="texto" placeholder="Ingresa la información adicional"></textarea>
		<center><input type="submit" name="submit" class="submit" value="Subir foto"></center>
		
	</form>
	
</body>
</html>