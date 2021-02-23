function validar13()
{
	var numero, fecha, fecha2, rfc, concepto, importe, cliente, direccion, empresa, clave, archivo, empleado, id_cliente;
	numero = document.getElementById("numero").value;
	fecha = document.getElementById("fecha").value;
	fecha2 = document.getElementById("fecha2").value;
	rfc = document.getElementById("rfc").value;
	concepto = document.getElementById("concepto").value;
	importe = document.getElementById("importe").value;
	cliente = document.getElementById("cliente").value;
	direccion = document.getElementById("direccion").value;
	empresa = document.getElementById("empresa").value;
	clave = document.getElementById("clave").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;
	id_cliente = document.getElementById("id_cliente").value;

	if(numero === "" || fecha === "" || fecha2 === "" || rfc === "" || concepto === "" || importe === "" || cliente === "" || direccion === "" || empresa === "" || clave === "" || empleado === "" || id_cliente === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de factura insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de factura contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha de emision contiene demaciados caracteres")
		return false;
	}
	else if(fecha2.lenght>12)
	{
		alert("La fecha de vencimeinto contiene demaciados caracteres")
		return false;
	}
	else if(rfc.lenght>20)
	{
		alert("El rfc contiene demaciados caracteres")
		return false;
	}
	else if(concepto.lenght>50)
	{
		alert("El concepto contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(importe))
	{
		alert("El importe insertado es incorrecto")
		return false;
	}
	else if(importe.lenght>12)
	{
		alert("El importe contiene demaciados caracteres")
		return false;
	}
	else if(cliente.lenght>50)
	{
		alert("El nombre del cliente contiene demaciados caracteres")
		return false;
	}
	else if(direccion.lenght>100)
	{
		alert("La direccioncontiene demaciados caracteres")
		return false;
	}
	else if(empresa.lenght>50)
	{
		alert("El nombre de la empresa contiene demaciados caracteres")
		return false;
	}
	else if (isNaN(clave)) 
	{
		alert("La clave de la empresa insertada es incorrecto")
		return false;
	}
	else if(clave.lenght>12)
	{
		alert("La clave de la empresa contiene demaciados caracteres")
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
	else if(isNaN(id_cliente))
	{
		alert("El  id del cliente insertado es incorrecto")
		return false;
	}
	else if(id_cliente.lenght>12)
	{
		alert("El id del cliente contiene demaciados caracteres")
		return false;
	}
}