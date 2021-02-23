function validar11()
{
	var numero, proyecto, cliente, apellido, fecha, problematica, archivo, empleado;
	numero = document.getElementById("numero").value;
	proyecto = document.getElementById("proyecto").value;
	cliente = document.getElementById("cliente").value;
	apellido = document.getElementById("apellido").value;
	fecha = document.getElementById("fecha").value;
	problematica = document.getElementById("problematica").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;

	if (numero === "" || proyecto === "" || cliente === "" || apellido === "" || fecha === "" || problematica === "" || empleado === "") 
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero del documento insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero del documento contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(proyecto))
	{
		alert("El numero del proyecto es incorrecto")
		return false;
	}
	else if(proyecto.lenght>12)
	{
		alert("El numero del proyecto contiene demaciados caracteres")
		return false;
	}
	else if(cliente.lenght>50)
	{
		alert("El nombre del cliente contiene demaciados caracteres")
		return false;
	}
	else if(apellido.lenght>50)
	{
		alert("Los apellidos de cliente contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha de elaboracion contiene demaciados caracteres")
		return false;
	}
	else if(problematica.lenght>200)
	{
		alert("La problematica contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(archivo))
	{
		alert("El numero de archivo insertado es incorrecto")
		return false;
	}
	else if(archivo.lenght>12)
	{
		alert("El numero de archivo contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(empleado))
	{
		alert("El  id de empleado insertado es incorrecto")
		return false;
	}
	else if(empleado.lenght>12)
	{
		alert("El id de empleado contiene demaciados caracteres")
		return false;
	}
}