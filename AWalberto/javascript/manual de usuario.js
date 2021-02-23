function validar9()
{
	var numero, autor, servicio, cliente, titulo, archivo, empleado;
	numero = document.getElementById("numero").value;
	autor = document.getElementById("autor").value;
	servicio = document.getElementById("servicio").value;
	cliente = document.getElementById("cliente").value;
	titulo = document.getElementById("titulo").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;

	if(numero === "" || autor === "" || servicio === "" || cliente === "" || titulo === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de manual insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de manual contiene demaciados caracteres")
		return false;
	}
	else if(autor.lenght>50)
	{
		alert("El autor contiene demaciados caracteres")
		return false;
	}
	else if(servicio.lenght>50)
	{
		alert("El servicio contiene demaciados caracteres")
		return false;
	}
	else if(cliente.lenght>50)
	{
		alert("El cliente contiene demaciados caracteres")
		return false;
	}
	else if(titulo.lenght>50)
	{
		alert("El titulo contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(archivo))
	{
		alert("El numero de archivo  insertado es incorrecto")
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