function validar17()
{
	var solicitante, direccion, email, telefono, fecha, titulo, institucion, fecha2, duracion, idioma, datos, nivel, aplicacion, puestos, empresa, duracion2, especialidad, archivo, id_empleado;
	solicitante = document.getElementById("solicitante").value;
	direccion = document.getElementById("direccion").value;
	email = document.getElementById("email").value;
	telefono = document.getElementById("telefono").value;
	fecha = document.getElementById("fecha").value;
	titulo = document.getElementById("titulo").value;
	institucion = document.getElementById("institucion").value;
	fecha2 = document.getElementById("fecha2").value;
	duracion = document.getElementById("duracion").value;
	idioma = document.getElementById("idioma").value;
	datos = document.getElementById("datos").value;
	nivel = document.getElementById("nivel").value;
	aplicacion = document.getElementById("aplicacion").value;
	puestos = document.getElementById("puestos").value;
	empresa = document.getElementById("empresa").value;
	duracion2 = document.getElementById("duracion2").value;
	especialidad = document.getElementById("especialidad").value;
	archivo = document.getElementById("archivo").value;
	id_empleado = document.getElementById("id_empleado").value;

	if(solicitante === "" || direccion === "" || email === "" || telefono === "" || fecha === "" || titulo === "" || institucion === "" || fecha2 === "" || duracion === "" || idioma === "" || datos === "" || id_empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(solicitante.lenght>50)
	{
		alert("El nombre del solicitante contiene demaciados carcateres")
		return false;
	}
	else if(direccion.lenght>100)
	{
		alert("La direccion contiene demaciados carcateres")
		return false;
	}
	else if(email.lenght>50)
	{
		alert("El email contiene demaciados carcateres")
		return false;
	}
	else if(isNaN(telefono))
	{
		alert("El numero de telefono insertado es incorrecto")
		return false;
	}
	else if(telefono.lenght>13)
	{
		alert("El numero de telefono contiene demaciados carcateres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados carcateres")
		return false;
	}
	else if(titulo.lenght>50)
	{
		alert("El certificado/titulo contiene demaciados carcateres")
		return false;
	}
	else if(institucion.lenght>50)
	{
		alert("El nombre de la institucione contiene demaciados carcateres")
		return false;
	}
	else if(fecha2.lenght>12)
	{
		alert("La fecha de estudios contiene demaciados carcateres")
		return false;
	}
	else if(duracion.lenght>20)
	{
		alert("La duracion contiene demaciados carcateres")
		return false;
	}
	else if(idioma.lenght>50)
	{
		alert("Idiomas contiene demaciados carcateres")
		return false;
	}
	else if(datos.lenght>200)
	{
		alert("Los datos de interes contiene demaciados carcateres")
		return false;
	}
	else if(nivel.lenght>50)
	{
		alert("El nivel de conocimiento contiene demaciados carcateres")
		return false;
	}
	else if(aplicacion.lenght>50)
	{
		alert("El conocimiento de aplicaciones contiene demaciados carcateres")
		return false;
	}
	else if(puestos.lenght>300)
	{
		alert("Puestos contiene demaciados carcateres")
		return false;
	}
	else if(empresa.lenght>200)
	{
		alert("Nombre de la empresa contiene demaciados carcateres")
		return false;
	}
	else if(duracion2.lenght>200)
	{
		alert("El numero de telefono contiene demaciados carcateres")
		return false;
	}
	else if(especialidad.lenght>50)
	{
		alert("La especialidad contiene demaciados carcateres")
		return false;
	}
	else if(isNaN(archivo))
	{
		alert("El numero de archivo insertado es incorrecto")
		return false;
	}
	else if(archivo.lenght>12)
	{
		alert("El numero de archivo contiene demaciados carcateres")
		return false;
	}
	else if(isNaN(id_empleado))
	{
		alert("El id de empleado insertado es incorrecto")
		return false;
	}
	else if(id_empleado.lenght>12)
	{
		alert("El id de empleado contiene demaciados carcateres")
		return false;
	}

}