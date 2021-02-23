function validar12()
{
	var numero, titulo, autor, lugar, fecha, contenido, archivo, nombre, asunto, hora, salida, empleado;
	numero = document.getElementById("numero").value;
	titulo = document.getElementById("titulo").value;
	autor = document.getElementById("autor").value;
	lugar = document.getElementById("lugar").value;
	fecha = document.getElementById("fecha").value;
	contenido = document.getElementById("contenido").value;
	archivo = document.getElementById("archivo").value;
	nombre = document.getElementById("nombre").value;
	asunto = document.getElementById("asunto").value;
	hora = document.getElementById("hora").value;
	salida = document.getElementById("salida").value;
	empleado = document.getElementById("empleado").value;

	if(numero === "" || titulo === "" || autor === "" || lugar === "" || fecha === "" || contenido === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de infome insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de informe contiene demaciados caracteres")
		return false;
	}
	else if(titulo.lenght>50)
	{
		alert("El titulo contiene demaciados caracteres")
		return false;
	}
	else if(autor.lenght>50)
	{
		alert("El nombre del autor contiene demaciados caracteres")
		return false;
	}
	else if(lugar.lenght>100)
	{
		alert("El lugar contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados caracteres")
		return false;
	}
	else if(contenido.lenght>200)
	{
		alert("El contenido contiene demaciados caracteres")
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
	else if(nombre.lenght>50)
	{
		alert("El nombre contiene demaciados caracteres")
		return false;
	}
	else if(asunto.lenght>50)
	{
		alert("asunto contiene demaciados caracteres")
		return false;
	}
	else if(hora.lenght>12)
	{
		alert("La hora de entrada contiene demaciados caracteres")
		return false;
	}
	else if(salida.lenght>12)
	{
		alert("La salida contiene demaciados caracteres")
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