function validar10()
{
	var numero, proyecto, personal, perfil, software, hardware, credenciales, archivo, empleado;
	numero = document.getElementById("numero").value;
	proyecto = document.getElementById("proyecto").value;
	personal = document.getElementById("personal").value;
	perfil = document.getElementById("perfil").value;
	software = document.getElementById("software").value;
	hardware = document.getElementById("hardware").value;
	credenciales = document.getElementById("credenciales").value;
	archivo = document.getElementById("archivo").value;
	empleado = document.getElementById("empleado").value;

	if(numero === "" || proyecto === "" || personal === "" || perfil === "" || software === "" || hardware === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de analisis insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de analisis contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(proyecto))
	{
		alert("El numero del proyecto es incorrecto")
		return false;
	}
	else if(proyecto.lenght>12)
	{
		alert("El numero de proyecto contiene demaciados caracteres")
		return false;
	}
	else if(personal.lenght>200)
	{
		alert("El personal requerido contiene demaciados caracteres")
		return false;
	}
	else if(perfil.lenght>100)
	{
		alert("El perfil de la institucion contiene demaciados caracteres")
		return false;
	}
	else if(software.lenght>100)
	{
		alert("El software requerido contiene demaciados caracteres")
		return false;
	}
	else if(hardware.lenght>100)
	{
		alert("El hardware necesario contiene demaciados caracteres")
		return false;
	}
	else if(credenciales.lenght>100)
	{
		alert("Las credenciales contienen demaciados caracteres")
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