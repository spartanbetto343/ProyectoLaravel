function validar15()
{
	var numero, tipo, precio, pago, clave;
	numero = document.getElementById("numero").value;
	tipo = document.getElementById("tipo").value;
	precio = document.getElementById("precio").value;
	pago = document.getElementById("pago").value;
	clave = document.getElementById("clave").value;

	if(numero === "" || tipo === "" || precio === "" || pago === "" || clave === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(numero))
	{
		alert("El numero de servicio insertado es incorrecto")
		return false;
	}
	else if(numero.lenght>12)
	{
		alert("El numero de servicio contiene demaciados caracteres")
		return false;
	}
	else if(tipo.lenght>50)
	{
		alert("El tipo de servicio contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(precio))
	{
		alert("El precio insertado es incorrecto")
		return false;
	}
	else if(precio.lenght>12)
	{
		alert("El precio contiene demaciados caracteres")
		return false;
	}
	else if(pago.lenght>50)
	{
		alert("El metodo de pago contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(clave))
	{
		alert("La clave de la empresa insertada es incorrecta")
		return false;
	}
	else if(clave.lenght>50)
	{
		alert("La clave de la empresa contiene demaciados caracteres")
		return false;
	}
}