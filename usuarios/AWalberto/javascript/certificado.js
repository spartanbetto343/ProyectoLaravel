function validar4()
{
	var certificado, tipo, nombre, institucion, expedicion, archivo, empleado;
	certificado = document.getElementById("certificado").value;
	tipo = document.getElementById("tipo").value;
	nombre = document.getElementById("nombre").value;
	institucion = document.getElementById("institucion").value;
	expedicion = document.getElementById("expedicion").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;

	if(certificado === "" || tipo === "" || nombre === "" || institucion === "" || expedicion === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(certificado))
	{
		alert("El id del certificado insertado es incorrecto")
		return false;
	}
	else if(certificado.lenght>12)
	{
		alert("El id del certificado contiene demaciados caracteres")
		return false;
	}
	else if(tipo.lenght>50)
	{
		alert("El tipo de servicio contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre contiene demaciados caracteres")
		return false;
	}
	else if(institucion.lenght>50)
	{
		alert("El nombre de la institucion contiene demaciados caracteres")
		return false;
	}
	else if(expedicion.lenght>4)
	{
		alert("El año de expedicion contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(expedicion))
	{
		alert("El año de expedicion insertado es incorrecto")
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