<?php session_start();
if(isset($_SESSION['usuario'])){
		header('Location:registrate.php');
}
if ($_SERVER['REQUEST_METHOD']=='GET') {
	$usuario = strtolower($_GET['usuario']);
	$password = $_GET['password'];
	
	$errores='';
	if (empty($usuario) or empty($password)) 
	{
		$errores = '<li> Por favor rellena los campos</li>';
	}
	else
	{
		$password = hash('sha512', $password);
		$conexion = new mysqli('localhost', 'root', '', 'datavoice');
		$sql = "SELECT * FROM usuario WHERE usuario= '$usuario' AND password='$password'";
		if($resultado = $conexion->query($sql))
		{	
			while($fila = $resultado->fetch_array())
			{
				switch ($fila['id_roles']) 
				{
					case '3':
						header('Location:AWalberto/Pagina inicio.html');
						break;
					
					case '1':
						header('Location:usuarios/AWalberto/Pagina inicio.html');
						break;
					case '2':
						header('Location:usuarios/AWalberto/Pagina inicio.html');
						break;
				}
				//header('Location:AWalberto/Pagina inicio.html');
			}//fin del while	
		}//fin del if

		//$password = hash('sha512', $password);
		//$conexion = new mysqli('localhost', 'root', '', 'datavoice');
		//$sql = "SELECT * FROM usuario WHERE usuario= '$usuario' AND password='$password' AND id_roles=1";
		//if($resultado = $conexion->query($sql))
		//{	
		//	while($fila = $resultado->fetch_array())
		//	{
		//		echo "".$sql;
				//header('Location:usuarios/AWalberto/Pagina inicio.html');
		//	}//fin del while	
		//}//fin del if
	}//fin del else
	
}//fin del if

require 'views/login_view.php';


?>