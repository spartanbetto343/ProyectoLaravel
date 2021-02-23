<?php session_start();
if(isset($_SESSION['usuario'])){
		header('Location:index.php');
}
if ($_SERVER['REQUEST_METHOD']=='GET') {
	$usuario = strtolower($_GET['usuario']);
	$password = $_GET['password'];
	$password2 = $_GET['password2'];

	//echo "".$usuario." ".$password." ".$password2;
	$errores='';
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores = '<li> Por favor rellena los campos </li>';
	}
	else{
		$conexion = new mysqli('localhost','root','', 'datavoice');

		$sql = "SELECT * FROM usuario WHERE usuario='$usuario'";
		if($resultado = $conexion->query($sql)){	
			while($fila = $resultado->fetch_array()){
				$errores .= '<li>El nombre de usuario ya existe</li>';

			}//fin del while	
		}//fin del if
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		if ($password != $password2){
			$errores = '<li> Las contraseñas no son iguales </li>';
		}//fin del if
		$id_roles ='3';
		$sql = "INSERT INTO  usuario VALUES (null,'$usuario','$password','$id_roles')";
		$conexion->query($sql);
		if($conexion->affected_rows>=1){
			header('Location:login.php');
			echo "".$sql;
		}//fin del if
	}//fin del else
	
}//fin del if
	require 'views/registrate_view.php';
?>