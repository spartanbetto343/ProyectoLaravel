function validar1()
{
	var id_empleado, nombre, apellidos, direccion, email, sueldo, puesto, sucursal, curp, rfc, telefono, titulo, cedula, mobiliario, empresa, expresion;
	id_empleado = document.getElementById("id_empleado").value;
	nombre = document.getElementById("nombre").value;
	apellidos = document.getElementById("apellidos").value;
	direccion = document.getElementById("direccion").value;
	email = document.getElementById("email").value;
	sueldo = document.getElementById("sueldo").value;
	puesto = document.getElementById("puesto").value;
	sucursal = document.getElementById("sucursal").value;
	curp = document.getElementById("curp").value;
	rfc = document.getElementById("rfc").value;
	telefono = document.getElementById("telefono").value;
	titulo = document.getElementById("titulo").value;
	cedula = document.getElementById("cedula").value;
	mobiliario = document.getElementById("mobiliario").value;
	empresa = document.getElementById("empresa").value;
	expresion = /\w+@\w+\.+[a-z]/;

	if (id_empleado === "" || nombre === "" || apellidos === "" ||direccion === "" || email === "" || sueldo === "" || puesto === "" || sucursal === "" || curp === "" || rfc === "" || telefono === "" || titulo === "" || mobiliario === "" || empresa === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	} 
	else if(id_empleado.lenght>12)
	{
		alert("El id es demaciado largo")
		return false;
	}
	else if(isNaN(id_empleado))
	{
		alert("El id insertado es incorrecto")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre insertado es demaciado largo")
		return false;
	}
	else if(apellidos.lenght>100)
	{
		alert("Sus apellidos son demaciado largos")
		return false;
	}
	else if (direccion.lenght>200)
	{
		alert("La direccion es demaciado larga")
		return false;
	} 
	else if(!expresion.test(email))
	{
		alert("El correo es incorrecto")
		return false;
	}
	else if(email.lenght>50)
	{
		alert("El correo es demaciado largo")
		return false;
	}
	else if(sueldo.lenght>12)
	{
		alert("El sueldo es excesivo")
		return false;
	}
	else if(isNaN(sueldo))
	{
		alert("El sueldo no debe contener letras")
		return false;
	}
	else if(puesto.lenght>50)
	{
		alert("El puesto es demaciado largo")
		return false;
	}
	else if (sucursal.lenght>50) 
	{
		alert("El nombre de la sucursal es demaciado largo")
		return false;
	}
	else if(curp.lenght>20)
	{
		alert("El curp es demaciado largo")
		return false;
	}
	else if(rfc.lenght>20)
	{
		alert("El rfc es demaciado largo")
		return false;
	}
	else if(isNaN(telefono))
	{
		alert("El telefono no debe de contener letras")
		return false;
	}
	else if(telefono.lenght>13)
	{
		alert("El telefono es demaciado largo")
		return false;
	}
	else if(titulo.lenght>150)
	{
		alert("El nombre dle titulo es demaciado largo")
		return false;
	}
	else if(cedula.lenght>12)
	{
		alert("La cedula es invalida")
		return false;
	}
	else if(isNaN(mobiliario))
	{
		alert("El codigo de mobiliario no debe de contener letras")
		return false;
	}
	else if (mobiliario.lenght>10) 
	{
		alert("El codigo de mobiliario es demaciado largo")
		return false;
	}
	else if(isNaN(empresa))
	{
		alert("La clave de la empresa no debe de contener letras")
		return false;
	}
	else if(empresa.lenght>10)
	{
		alert("La clave es muy larga")
		return false;
	}
}