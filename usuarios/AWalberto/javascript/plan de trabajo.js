function validar2()
{
	var numero, titulo, proyecto, fecha, fecha2, duracion, empleado;
	numero = document.getElementById("numero").value;
	titulo = document.getElementById("titulo").value;
	proyecto = document.getElementById("proyecto").value;
	fecha = document.getElementById("fecha").value;
	fecha2 = document.getElementById("fecha2").value;
	duracion = document.getElementById("duracion").value;
	empleado = document.getElementById("empleado").value;

	if (numero === "" || titulo === "" || proyecto === "" || fecha === "" || fecha2 === "" || duracion === "" || empleado === "") 
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert ("El numero no debe de contener letras")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert ("El numero es demaciado largo")
		return false;
	}
	else if(titulo.lenght>100)
	{
		alert ("El titulo es demaciado largo")
		return false;
	}
	else if(isNaN(proyecto))
	{
		alert ("El numero del proyecto no debe de contener letras")
		return false;
	}
	else if (proyecto.lenght>12) 
	{
		alert ("El numero del proyecto es demaciado largo")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert ("La fecha de inicio contiene demaciados caracteres")
		return false;
	}
	else if(fecha2.lenght>12)
	{
		alert ("La fecha limite contiene demaciados caracteres")
		return false;
	}
	else if(duracion.lenght>50)
	{
		alert ("La duracion contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(empleado))
	{
		alert ("El id del empleado no debe de contener letras")
		return false;
	}
	else if(empleado.lenght>12)
	{
		alert ("El id de empleado contiene demaciados caracteres")
		return false;
	}
}