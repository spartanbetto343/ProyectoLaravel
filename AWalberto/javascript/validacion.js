function validar()
{
	var nombre, apellidos, estado, direccion, codigo, telefono, email, tipo, metodo, precio, expresion;
	nombre = document.getElementById("nombre").value;
	apellidos = document.getElementById("apellidos").value;
	estado = document.getElementById("estado").value;
	direccion = document.getElementById("direccion").value;
	codigo = document.getElementById("codigo").value;
	telefono = document.getElementById("telefono").value;
	email = document.getElementById("email").value;
	metodo = document.getElementById("metodo").value;
	precio = document.getElementById("precio").value;
	tipo = document.getElementById("tipo").value;
	expresion = /\w+@\w+\.+[a-z]/;

	if(nombre === "" || apellidos === "" || estado === "Selecciona tu estado" || direccion === "" || codigo === "" || telefono === "" || tipo === "Tipo de servicio" || metodo === "Metodo de pago" precio === "") 
		{
		alert("Faltan campos por llenar")
	    return false;
		}
	else if(nombre.length>50)
	{
		alert("Tu nombre es muy largo")
		return false;
	}
	else if(apellidos.length>100)	
	{
		alert("Tus apellidos son muy largos")
		return false;
	}
	else if(direccion.length>200) 
	{
		alert("Tudireccion es muy larga")
		return false;
	}
	else if(codigo.length>6)
	{
		alert("Tu cadigo postal es muy largo")
		return false;
	}
    else if(isNaN(codigo))
    {
    	alert("Tu codigo postal no debe de contener letras")
    	return false;
    }
	else if(telefono.length>13)
	{
		alert("Tu telefono es muy largo")
		return false;
	}
	else if(isNaN(telefono))
	{
		alert("Tu telefono esta escrito incorrectamente")
		return false;
	}
	else if(!expresion.test(email))
	{
		alert("Tu correo es incorrecto")
		return false;
	}
	else if (email.length>50) 
	{
		alert("Tu correo electronico es muy largo")
	}
}

