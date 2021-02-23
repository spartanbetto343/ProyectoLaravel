function validar8()
{
	var numero, nombre, fecha, necesidades, tipo, requerimientos, solucion, empleado;
	numero = document.getElementById("numero").value;
	nombre = document.getElementById("nombre").value;
	fecha = document.getElementById("fecha").value;
	necesidades = document.getElementById("necesidades").value;
	tipo = document.getElementById("tipo").value;
	requerimientos = document.getElementById("requerimientos").value;
	solucion = document.getElementById("solucion").value;
	empleado = document.getElementById("empleado").value;

	if(numero === "" || nombre === "" || fecha === "" || necesidades === "" || tipo === "" || requerimientos === "" || solucion === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de test insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de test contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El noombre del cliente contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados caracteres")
		return false;
	}
	else if(necesidades.lenght>150)
	{
		alert("Las necesidades contiene demaciados caracteres")
		return false;
	}
	else if(tipo.lenght>50)
	{
		alert("El tipo de servicio contiene demaciados caracteres")
		return false;
	}
	else if(requerimientos.lenght>>150)
	{
		alert("Los requerimientos cotienen demaciados caracteres")
		return false;
	}
	else if(solucion.lenght>150)
	{
		alert("La solucion contiene demaciados caracteres")
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