function validar7()
{
	var numero, proyecto, alcances, implicaciones, desiciones, empleado;
	numero = document.getElementById("numero").value;
	proyecto = document.getElementById("proyecto").value;
	alcances = document.getElementById("alcances").value;
	implicaciones = document.getElementById("implicaciones").value;
	desiciones = document.getElementById("desiciones").value;
	empleado = document.getElementById("empleado").value;

	if (numero=== "" || proyecto === "" || alcances === "" || implicaciones === "" || desiciones === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de minuta del certificado insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de minuta contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(proyecto))
	{
		alert("El numero del proyecto es incorrecto")
		return false;
	}
	else if(proyecto.lenght>12)
	{
		alert("El numero del proyecto contiene demaciados caracteres")
		return false;
	}
	else if(alcances.lenght>200)
	{
		alert("Los alcances contiene demaciados caracteres")
		return false;
	}
	else if(implicaciones.lenght>200)
	{
		alert("Las implicaciones contiene demaciados caracteres")
		return false;
	}
	else if(desiciones.lenght>200)
	{
		alert("Las desiciones contienen demaciados caracteres")
		return false;
	}
	else if(isNaN(empleado))
	{
		alert("El id de empleado insertado es incorrecto")
		return false;
	}
	else if(empleado.lenght>12)
	{
		alert("El id de empleado contiene demaciados caracteres")
		return false;
	}
	
}