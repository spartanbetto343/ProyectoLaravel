function validar16()
{
	var numero, tipo, nombre, apellido, empresa, direccion, fecha, duracion, archivo, servicio, monto, minimo, maximo, puesto, prueba, vacaciones, id_cliente;
	numero = document.getElementById("numero").value;
	tipo = document.getElementById("tipo").value;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	empresa = document.getElementById("empresa").value;
	direccion = document.getElementById("direccion").value;
	fecha = document.getElementById("fecha").value;
	duracion = document.getElementById("duracion").value;
	archivo = document.getElementById("archivo").value;
	servicio = document.getElementById("servicio").value;
	monto = document.getElementById("monto").value;
	minimo = document.getElementById("minimo").value;
	maximo = document.getElementById("maximo").value;
	puesto = document.getElementById("puesto").value;
	prueba = document.getElementById("prueba").value;
	vacaciones = document.getElementById("vacaciones").value;
	id_cliente = document.getElementById("id_cliente").value;

	if(numero === "" || tipo === "" || nombre === "" || apellido === "" || empresa === "" || direccion === "" || fecha === "" || duracion === "" || archivo === "" || id_cliente === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de contrato insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de contrato contiene demaciados caracteres")
		return false;
	}
	else if(tipo.lenght>50)
	{
		alert("El tipo de contrato contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre contiene demaciados caracteres")
		return false;
	}
	else if(apellido.lenght>50)
	{
		alert("El apellido contiene demaciados caracteres")
		return false;
	}
	else if(empresa.lenght>50)
	{
		alert("El nombre de la empresa contiene demaciados caracteres")
		return false;
	}
	else if(direccion.lenght>100)
	{
		alert("La direccion de la empresa contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados caracteres")
		return false;
	}
	else if(duracion.lenght>15)
	{
		alert("La duracion del contrato contiene demaciados caracteres")
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
	else if(servicio.lenght>50)
	{
		alert("El tipo de servicio contiene demaciados caracteres")
		return false;
	}
	else if(monto.lenght>12)
	{
		alert("El monto a pagar contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(minimo))
	{
		alert("El sueldo minimo insertado es incorrecto")
		return false;
	}
	else if(minimo.lenght>12)
	{
		alert("El sueldo minimo contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(maximo))
	{
		alert("El sueldo maximo insertado es incorrecto")
		return false;
	}
	else if(maximo.lenght>12)
	{
		alert("El sueldo maximo contiene demaciados caracteres")
		return false;
	}
	else if(puesto.lenght>50)
	{
		alert("El puesto contiene demaciados caracteres")
		return false;
	}
	else if(prueba.lenght>15)
	{
		alert("La duracion de prueba contiene demaciados caracteres")
		return false;
	}
	else if(vacaciones.lenght>50)
	{
		alert("Las vacaciones contienen demaciados caracteres")
		return false;
	}
	else if(isNaN(id_cliente))
	{
		alert("El  id de cliente insertado es incorrecto")
		return false;
	}
	else if(id_cliente.lenght>12)
	{
		alert("El id de cliente contiene demaciados caracteres")
		return false;
	}
}