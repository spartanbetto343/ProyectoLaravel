<?php
$conexion = new mysqli('localhost', 'root', '', 'datavoice');
if ($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)) {
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if($check !== false)
	{
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino.$_FILES['foto']['name'];
		echo "".$archivo_subido;
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
		
		$titulo=$_POST['titulo'];
		$imagen=$archivo_subido;
		$texto= $_POST['texto'];
		$info= $_POST['info'];
		$sql = "INSERT INTO fotos VALUES (null, '$titulo','$imagen', '$texto','$info')";
		$conexion->query($sql);
		header('Location: index.php');
	} else {
		$error = "El archivo no es una imagen o el archivo es muy pesado";
	}
}
require 'view/subir-view.php';
?>