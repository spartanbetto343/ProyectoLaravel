function validar5()
{
	var numero, nombre, direccion, telefono, contacto, cargo, tipo, detalles, solucion, fecha, factura, archivo, empleado, cliente;
	numero = document.getElementById("numero").value;
	nombre = document.getElementById("nombre").value;
	direccion = document.getElementById("direccion").value;
	telefono = document.getElementById("telefono").value;
	contacto = document.getElementById("contacto").value;
	cargo = document.getElementById("cargo").value;
	tipo = document.getElementById("tipo").value;
	detalles = document.getElementById("detalles").value;
	solucion = document.getElementById("solucion").value;
	fecha = document.getElementById("fecha").value;
	factura = document.getElementById("factura").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;
	cliente = document.getElementById("cliente").value;

	if(numero === "" || nombre === "" || direccion === "" || telefono === "" || contacto === "" || cargo === "" || tipo === "" || detalles === "" || solucion === "" || fecha === "" || empleado === "" || cliente === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if (isNaN(numero))
	{
		alert("El numero de formulario insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de formulario contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre contiene demaciados caracteres")
		return false;
	}
	else if(direccion.lenght>100)
	{
		alert("El numero de formulario contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(telefono))
	{
		alert("El telefono insertado es incorrecto")
		return false;
	}
	else if(telefono.lenght>13)
	{
		alert("El telefono contiene demaciados caracteres")
		return false;
	}
	else if(contacto.lenght>50)
	{
		alert("El nombre del contacto contiene demaciados caracteres")
		return false;
	}
	else if(cargo.lenght>50)
	{
		alert("El cargo contiene demaciados caracteres")
		return false;
	}
	else if(tipo.lenght>50)
	{
		alert("El tipo de servicio contiene demaciados caracteres")
		return false;
	}
	else if(detalles.lenght>150)
	{
		alert("El numero de formulario contiene demaciados caracteres")
		return false;
	}
	else if(solucion.lenght>150)
	{
		alert("La solucion contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(factura))
	{
		alert("El numero de factura es incorrecto")
		return false;
	}
	else if(factura.lenght>12)
	{
		alert("El numero de factura contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(archivo))
	{
		alert("El numero de archivo es incorrecto")
		return false;
	}
	else if(archivo.lenght>12)
	{
		alert("El numero de archivo contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(empleado))
	{
		alert("El id de empleado es incorrecto")
		return false;
	}
	else if(empleado.lenght>12)
	{
		alert("El id de empleado contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(cliente))
	{
		alert("El id del cliente es incorrecto")
		return false;
	}
	else if(cliente.lenght>12)
	{
		alert("El id del cliente contiene demaciados caracteres")
		return false;
	}
}