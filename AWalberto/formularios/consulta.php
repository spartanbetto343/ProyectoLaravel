<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultas</title>
</head>
<body>
	<center>
	<h1><font>¿Que deseas consultar?</font></h1>

	<h2><font>Mobiliario</font></h2>
	<form action="consultas/ver todos mobiliario.php" method="get">
		<p><b><font >Presione el boton de abajo para generar la consulta de todo el mobiliario que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Mobiliarios">
	</form>

	<form action="consultas/ver 1 mobiliario.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo producto, agregue el codigo del mismo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="codigo" placeholder="Codigo" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Mobiliario">
	</form>
	<br>
	<br>
	<br>
	


	<h2><font>Empleado</font></h2>
	<form action="consultas/c_empleado.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los empleados que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Empleados">
	</form>
	
	<form action="consultas/c_1empleado.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo empleado, agregue el id del empleado donde se encuentra en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="empleado" placeholder="Id del empleado" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Empleado">
	</form>
	<br>
	<br>
	<br>




	<h2><font>Plan de Trabajo</font></h2>
	<form action="consultas/c_plan_trabajo.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos lo planes de trabajo que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Planes de Trabajo">
	</form>
	
	<form action="consultas/c1_plan_trabajo.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo plan de trabajo, agregue el numero del plan que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="plan" placeholder="Numero de Plan de Trabajo" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Plan de Trabajo">
	</form>
	<br>
	<br>
	<br>




	<h2><font>Cerfificado o Titulo</font></h2>
	<form action="consultas/c_certificado.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos lo cer|tificados o titulos que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Certificados o Titulos">
	</form>
	
	<form action="consultas/c1_certificado.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo Certificado o titulo, agregue el id con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="certificado" placeholder="Id de Certificado o Titulo" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Certificado o Titulo">
	</form>
	<br>
	<br>
	<br>







	<h2><font>Recibo de Nomina</font></h2>
	<form action="consultas/c_nomina.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos lo recibos de nomina que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Recibos de Nomina">
	</form>
	
	<form action="consultas/c1_nomina.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo recibo de nomina, agregue el folio con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="nomina" placeholder="Folio de Recibo de Nomina" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Recibo de Nomina">
	</form>
	<br>
	<br>
	<br>







	<h2><font>Minuta</font></h2>
	<form action="consultas/c_minuta.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todas las minutas que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Minutas">
	</form>
	
	<form action="consultas/c1_minuta.php" method="get">
	<p><b><font>Si requiere hacer una consulta de una sola minuta , agregue el numero de minuta con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="minuta" placeholder="Numero de Minuta" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Minuta">
	</form>
	<br>
	<br>
	<br>






	<h2><font>Test de Necesidades</font></h2>
	<form action="consultas/c_test.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los test de necesidades que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Test de Necesidades">
	</form>
	
	<form action="consultas/c1_test.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo test de necesidades, agregue el numero de test con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="test" placeholder="Numero de Test" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Test de Necesidades">
	</form>
	<br>
	<br>
	<br>





	<h2><font>Manual de usuario</font></h2>
	<form action="consultas/c_manual.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los manuales de usuario que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Manuales se Usuario">
	</form>
	
	<form action="consultas/c1_manual.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo manual de usuario, agregue el numero de manual con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="manual" placeholder="Numero de Manual" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Manual de Usuario">
	</form>
	<br>
	<br>
	<br>









	<h2><font>Curriculum</font></h2>
	<form action="consultas/c_curriculum.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los curriculums que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Curriculums">
	</form>
	
	<form action="consultas/c1_curriculum.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo curriculum, agregue el nombre del solicitante con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="curriculum" placeholder="Nombre del solicitante" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Curriculum">
	</form>
	<br>
	<br>
	<br>






	<h2><font>Analisis de Recursos Necesarios</font></h2>
	<form action="consultas/c_analisis.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los analisis de recursos necesarios que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Analisis de Recurosos Necesarios">
	</form>
	
	<form action="consultas/c1_analisis.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo analisis de recursos necesarios, agregue el numero de analisis con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="analisis" placeholder="Numero de Analisis" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Anailsis de Recursos Necesarios">
	</form>
	<br>
	<br>
	<br>





	<h2><font>Proyecto Documentado</font></h2>
	<form action="consultas/c_proyecto.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los proyecos documentados que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Proyectos Documentados">
	</form>
	
	<form action="consultas/c1_proyecto.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo proyecto documentado, agregue el numero de documentacion con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="proyecto" placeholder="Numero de Documentacion" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Proyecto Documentado">
	</form>
	<br>
	<br>
	<br>





	<h2><font>Informe Reporte</font></h2>
	<form action="consultas/c_informe.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los informes o reportes que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Informes o Reportes">
	</form>
	
	<form action="consultas/c1_informe.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo recibo informe o reporte, agregue el numero de informe con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="informe" placeholder="Numero de informe" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Informe o Reporte">
	</form>
	<br>
	<br>
	<br>






	<h2><font>Contrato</font></h2>
	<form action="consultas/c_contrato.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos lo contratos que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Contratos ">
	</form>
	
	<form action="consultas/c1_contrato.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo contrato, agregue el numero de contrato con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="contrato" placeholder="Numero de Contrato" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar contrato">
	</form>
	<br>
	<br>
	<br>





	<h2><font>Servicio</font></h2>
	<form action="consultas/c_servicios.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los servicios que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Servicios">
	</form>
	
	<form action="consultas/c1_servicios.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo servicio, agregue el numero de servicio con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="servicio" placeholder="Numero de Servicio" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Servicio">
	</form>
	<br>
	<br>
	<br>





	<h2><font>Clientes</font></h2>
	<form action="consultas/c_cliente.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los clientes que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Clientes">
	</form>
	
	<form action="consultas/c1_cliente.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo cliente, agregue el id del cliente con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="cliente" placeholder="Id del Cliente" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Cliente">
	</form>
	<br>
	<br>
	<br>










	<h2><font>Factura</font></h2>
	<form action="consultas/c_factura.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todas las fecturas que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Facturas">
	</form>
	
	<form action="consultas/c1_factura.php" method="get">
	<p><b><font>Si requiere hacer una consulta de una sola factura, agregue el numero de factura con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="factura" placeholder="Numero de Factura" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Factura">
	</form>
	<br>
	<br>
	<br>







	<h2><font>Orden de Servicio</font></h2>
	<form action="consultas/c_orden.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todas las ordenes de servicio que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Orden se Servicio">
	</form>
	
	<form action="consultas/c1_orden.php" method="get">
	<p><b><font>Si requiere hacer una consulta de una sola orden de servicio, agregue el numero de orden con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="orden" placeholder="Numero de orden" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Orden de Servicio">
	</form>
	<br>
	<br>
	<br>







	<h2><font>Formulario de Queja</font></h2>
	<form action="consultas/c_queja.php" method="get">
		<p><b><font>Presione el boton de abajo para generar la consulta de todos los formularios de queja que se encuentren registrados.</font></b></p><br>
		<input type="submit" name="Consultar" value="Consultar Formularios de Queja">
	</form>
	
	<form action="consultas/c1_queja.php" method="get">
	<p><b><font>Si requiere hacer una consulta de un solo un formulario de queja, agregue el numero de formulario de queja con el que se realizo en el campo de abajo y proceda a presionar el boton para generar la consulta</font></b></p><br>
	<input type="text" name="queja" placeholder="Numero de Formulario de Queja" size="40">
	<br>
	<br>
	<input type="submit" name="consultar" value="Consultar Formularios de Queja">
	</form>
	<br>
	<br>
	<br>
	</center>
	
</body>
</html>