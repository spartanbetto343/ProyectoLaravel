function validar3()
{
	var orden, fecha, nombre, direccion, telefono, tipo, descripcion, precio, forma, archivo, empleado;
	orden = document.getElementById("orden").value;
	fecha = document.getElementById("fecha").value;
	nombre = document.getElementById("nombre").value;
	direccion = document.getElementById("direccion").value;
	telefono = document.getElementById("telefono").value;
	tipo = document.getElementById("tipo").value;
	descripcion = document.getElementById("descripcion").value;
	precio = document.getElementById("precio").value;
	forma = document.getElementById("forma").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;
	
	if(orden === "" || fecha === "" || nombre === "" || direccion === "" || telefono === "" || tipo === "" || descripcion === "" || precio === "" || forma === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(orden.lenght>12)
	{
		alert("El numero de orden es demaciado largo")
		return false;
	}
	else if(isNaN(orden))
	{
		alert("El numero de orden insertado es incorrecto")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El numero del cliente contiene demaciados caracteres")
		return false;
	}
	else if(direccion.lenght>100)
	{
		alert("La direccion contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(telefono))
	{
		alert("El numero de telefono insertado es incorrecto")
		return false;
	}
	else if(telefono.lenght>13)
	{
		alert("El telefono contiene demaciados caracteres")
		return false;
	}
	else if(tipo.lenght>50)
	{
		alert("El tipo de servicio contiene demaciados caracteres")
		return false;
	}
	else if(descripcion.lenght>150)
	{
		alert("La descripcion del servicio contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(precio))
	{
		alert("El precio insertado es incorrecto")
		return false;
	}
	else if(precio.lenght>12)
	{
		alert("El precio contiene demaciados caracteres")
		return false;
	}
	else if(forma.lenght>30)
	{
		alert("La froma de pago contiene demaciados caracteres")
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
		lert("El id de empleado contiene demaciados caracteres")
		return false;
	}

}