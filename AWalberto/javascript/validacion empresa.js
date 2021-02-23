function validar2()
{
	var clave, nombre, direccion, clave_ent, telefono;
	clave = document.getElementById("clave").value;
	nombre = document.getElementById("nombre").value;
	direccion = document.getElementById("direccion").value;
	clave_ent = document.getElementById("clave_ent").value;
	telefono = document.getElementById("telefono").value;

	if(clave === "" || nombre === "" || direccion === "" || clave_ent === "" || telefono === "")
	{
		alert("Faltan campos por llenar")
		return false;
	}
	else if(clave.lenght>10)
	{
		alert("La clave es erronea")
		return false;
	}
	else if(isNaN(clave))
	{
		alert("La clave no debe contener letras")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre es demaciado largo")
		return false;
	}
	else if(direccion.lenght>200)
	{
		alert("La direccion es demaciado larga")
		return false;
	}
	else if(isNaN(clave_ent))
	{
		alert("La clave federativa no debe de contener letras")
		return false;
	}
	else if(clave_ent.lenght>6)
	{
		alert("La clave deferativa no es valida")
		return false;
	}
	else if(isNaN(telefono))
	{
		alert("El telefono no debe de con tener letras")
		return false;
	}
	else if(telefono.lenght>13)
	{
		alert("El telefono es demaciado largo")
		return false;
	}

}