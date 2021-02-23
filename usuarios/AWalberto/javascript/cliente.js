function validar14()
{
	var cliente, nombre, apellido, direccion, telefono, email, estado, codigo, cuenta, calles, manzana, referencia, contrato, servicio;
	cliente = document.getElementById("cliente").value;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	direccion = document.getElementById("direccion").value;
	telefono = document.getElementById("telefono").value;
	email = document.getElementById("email").value;
	estado = document.getElementById("estado").value;
	codigo = document.getElementById("codigo").value;
	cuenta = document.getElementById("cuenta").value;
	calles = document.getElementById("calles").value;
	manzana = document.getElementById("manzana").value;
	referencia = document.getElementById("referencia").value;
	contrato = document.getElementById("contrato").value;
	servicio = document.getElementById("servicio").value;

	if(cliente === "" || nombre === "" || apellido === "" || direccion === "" || telefono === "" || email === "" || estado === "" || codigo === "" || contrato === "" || servicio === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(cliente))
	{
		alert("El id del cliente insertado es incorrecto")
		return false;
	}
	else if(cliente.lenght>12)
	{
		alert("El id del cliente contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre del cliente contiene demaciados caracteres")
		return false;
	}
	else if(apellido.lenght>100)
	{
		alert("El apellido del cliente contiene demaciados caracteres")
		return false;
	}
	else if(direccion.lenght>200)
	{
		alert("La direccion contiene demaciados caracteres")
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
	else if(email.lenght>50)
	{
		alert("El email contiene demaciados caracteres")
		return false;
	}
	else if(estado.lenght>50)
	{
		alert("El estado contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(codigo))
	{
		alert("El codigo postal insertado es incorrecto")
		return false;
	}
	else if(codigo.lenght>6)
	{
		alert("El codigo postal contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(cuenta))
	{
		alert("El numero de cuenta insertado es incorrecto")
		return false;
	}
	else if(cuenta.lenght>15)
	{
		alert("El numero de cuenta contiene demaciados caracteres")
		return false;
	}
	else if(calles.lenght>200)
	{
		alert("Entre calles contiene demaciados caracteres")
		return false;
	}
	else if(manzana.lenght>50)
	{
		alert("El nombre de la manzana contiene demaciados caracteres")
		return false;
	}
	else if(referencia.lenght>13)
	{
		alert("La referencia contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(contrato))
	{
		alert("El numero de contrato insertado es incorrecto")
		return false;
	}
	else if(contrato.lenght>12)
	{
		alert("El numero del contrato contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(servicio))
	{
		alert("El numero de servicio insertado es incorrecto")
		return false;
	}
	else if(servicio.lenght>12)
	{
		alert("El numero de servicio contiene demaciados caracteres")
		return false;
	}
}