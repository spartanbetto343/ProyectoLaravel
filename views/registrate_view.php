<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<style>
		.bg-image
		{
			background-image: url('img/bg1.jpg');
			background-size: cover;
		}
	</style>

	<title>REGISTRATE</title>
</head>
<body class="bg-image">
	<div class="container">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" name="login">
			
			<div class="input-group">	
				<i class="fa fa-user-o icons" aria-hidden="false"></i><input type="text" name="usuario"placeholder="Usuario" class="form-control">

			</div>
			<div class="input-group">	
				<i class="fa fa-lock icons" aria-hidden="false"></i><input type="password" name="password" placeholder="Contraseña" class="form-control">

			</div>

			<div class="input-group">		
				<i class="fa fa-lock icons" aria-hidden="false"></i><input type="password" name="password2"  placeholder="Repetir Contraseña" class="form-control">
			</div>

			<div class="input-group">	
				<button type="submit" name="submit" class="btn btn-flat-green">Ingresar</button>
			</div>
			
			
		</form>
		<p class="login-link">
			¿Ya tienes cuenta?
			<a href="login.php">Inicia Sesión</a>
			
		</p>
		
	</div>
	
</body>
</html>