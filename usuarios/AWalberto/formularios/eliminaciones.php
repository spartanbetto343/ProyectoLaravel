<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminaciones</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style>
		body
		{
			background-image: url('imagenes/4.jpg');
			background-size: cover;
			font-family: Helvetica;
		}
		h1
		{
			background-color: white;
			color: black;
			text-align: center;
			max-width: 850px;
			border-radius: 10px;
		}
		h3 , h2
		{
			background-color: #fff;
			color: black;
			text-align: center;
			max-width: 850px;
			border-radius: 10px;
		}
		p
		{
			background-color: white;
			color: black;
			text-align: center;
			max-width: 850px;
			border-radius: 10px;
			padding: 10px 10px 10px 10px;
			font-size: 20px;
			text-align: justify;
		}
		.boton
		{
			padding: 10px 10px 10px 10px;
			background-color: red;
			color: white;
			border-radius: 10px;
			font-size: 15px;
		}
		input
		{
			padding: 10px 10px 10px 10px;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<center>

	<p class="advertencia"><strong>Advertencia:</strong>La eliminacion de datos dentro de la base de datos es de suma importancia, por lo que se le pide tome las precausiones necesarias para no cometer alguna equivocacion puesto que los datos son muy sencibles y no podran ser recuperados despues de la eliminacion.</p>

	<h2>¿Que deseas eliminar?</h2>

	<h3>Mobiliario</h3>
	<form action="eliminaciones/e_mobiliario.php" method="get">
	<p><b>Si requiere eliminar el registro de un mobiliario debe de poner el codigo del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="mobiliario" placeholder="Codigo de Mobiiario" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Mobiliario">
	</form>
	<br>
	<br>





	<h3>Empleado</h3>
	<form action="eliminaciones/e_empleado.php" method="get">
	<p><b>Si requiere eliminar el registro de un empleado debe de poner el id del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="empleado" placeholder="Id del Empleado" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Empleado">
	</form>
	<br>
	<br>




	<h3>Plan de Trabajo</h3>
	<form action="eliminaciones/e_plan.php" method="get">
	<p><b>Si requiere eliminar el registro de un plan de trabajo debe de poner el numero del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="plan" placeholder="Numero de Plan de Trabajo" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Plan de Trabajo">
	</form>
	<br>
	<br>





	<h3>Certificado o Titulo</h3>
	<form action="eliminaciones/e_certificado.php" method="get">
	<p><b>Si requiere eliminar el registro de un certificado o titulo debe de poner el id del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="certificado" placeholder="Id del Certificado" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Certificado o Titulo">
	</form>
	<br>
	<br>



	

	<h3>Recibo de Nomina</h3>
	<form action="eliminaciones/e_recibo.php" method="get">
	<p><b>Si requiere eliminar el registro de un recibo de nomina o titulo debe de poner el folio del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="recibo" placeholder="Folio de Recibo de Nomina" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Recibo de Nomina">
	</form>
	<br>
	<br>





	<h3>Minuta</h3>
	<form action="eliminaciones/e_minuta.php" method="get">
	<p><b>Si requiere eliminar el registro de una minuta debe de poner el numero del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="minuta" placeholder="Numero de Minuta" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Minuta">
	</form>
	<br>
	<br>





	<h3>Test de Necesidades</h3>
	<form action="eliminaciones/e_necesidades.php" method="get">
	<p><b>Si requiere eliminar el registro de un test de necesidades debe de poner el numero del test del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="test" placeholder="Numero del Test" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar test">
	</form>
	<br>
	<br>





	<h3>Manual de Usuario</h3>
	<form action="eliminaciones/e_manual.php" method="get">
	<p><b>Si requiere eliminar el registro de un manual debe de poner el numero del manual del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="manual" placeholder="Numero del Manual" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Manual">
	</form>
	<br>
	<br>





	<h3>Curriculum</h3>
	<form action="eliminaciones/e_curriculum.php" method="get">
	<p><b>Si requiere eliminar el registro de un curriculum debe de poner el nombre del solicitante del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="curriculum" placeholder="Nombre del Solicitante" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Curriculum">
	</form>
	<br>
	<br>




	<h3>Analisis de Recursos Necesarios</h3>
	<form action="eliminaciones/e_analisis.php" method="get">
	<p><b>Si requiere eliminar el registro de un analisis de recursos necesarios debe de poner el numero del analisis del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="analisis" placeholder="Numero del analisis" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Analisis">
	</form>
	<br>
	<br>




	<h3>Proyecto Documentado</h3>
	<form action="eliminaciones/e_proyecto.php" method="get">
	<p><b>Si requiere eliminar el registro de un proyecto documentado debe de poner el numero de documentacion del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="proyecto" placeholder="Numero del Proyecto" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Proyecto">
	</form>
	<br>
	<br>




	<h3>Informe o Reporte</h3>
	<form action="eliminaciones/e_informe.php" method="get">
	<p><b>Si requiere eliminar el registro de un informe o reporte debe de poner el numero del informe del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="informe" placeholder="Numero del Informe" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Informe">
	</form>
	<br>
	<br>





	<h3>Contrato</h3>
	<form action="eliminaciones/e_contrato.php" method="get">
	<p><b>Si requiere eliminar el registro de un contrato debe de poner el numero del contrato del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="contrato" placeholder="Numero del Contrato" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Contrato">
	</form>
	<br>
	<br>





	<h3>Servicio</h3>
	<form action="eliminaciones/e_servicio.php" method="get">
	<p><b>Si requiere eliminar el registro de un servicio debe de poner el numero del servicio del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="servicio" placeholder="Numero del Servicio" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Servicio">
	</form>
	<br>
	<br>





	<h3>Cliente</h3>
	<form action="eliminaciones/e_cliente.php" method="get">
	<p><b>Si requiere eliminar el registro de un cliente debe de poner el id del cliente del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="cliente" placeholder="Id del Cliente" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Cliente">
	</form>
	<br>
	<br>







	<h3>Factura</h3>
	<form action="eliminaciones/e_factura.php" method="get">
	<p><b>Si requiere eliminar el registro de una factura debe de poner el numero de la factura del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="factura" placeholder="Numero de la Factura" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Factura">
	</form>
	<br>
	<br>





	<h3>Orden de Servicio</h3>
	<form action="eliminaciones/e_orden.php" method="get">
	<p><b>Si requiere eliminar el registro de una orden de servicio debe de poner el numero de la orden del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="orden" placeholder="Numero de la Orden de Servicio" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Orden de Servicio">
	</form>
	<br>
	<br>





	<h3>Formulario de Queja</h3>
	<form action="eliminaciones/e_formulario.php" method="get">
	<p><b>Si requiere eliminar el registro de un formulario de queja debe de poner el numero del formulario del mismo en el campo de abajo y presionar el boton para proceder a la eliminacion</b></p><br>
	<input type="text" name="formulario" placeholder="Numero del Formulario de Queja" size="40">
	<br>
	<br>
	<input class="boton" type="submit" name="consultar" value="Eliminar Formulario de Queja">
	</form>
	<br>
	<br>

	</center>
	
</body>
</html>