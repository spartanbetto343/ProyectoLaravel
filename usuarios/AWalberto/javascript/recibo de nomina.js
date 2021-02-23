function validar6()
{
	var folio, empresa, direccion, rfc, periodo, fecha, nombre, curp, pago, normal, hora, trabajadas, isr, imss, deducciones, neto, fiscal, cuenta, empleado;
	folio = document.getElementById("folio").value;
	empresa = document.getElementById("empresa").value;
	direccion = document.getElementById("direccion").value;
	rfc = document.getElementById("rfc").value;
	periodo = document.getElementById("periodo").value;
	fecha = document.getElementById("fecha").value;
	nombre = document.getElementById("nombre").value;
	curp = document.getElementById("curp").value;
	pago = document.getElementById("pago").value;
	normal = document.getElementById("normal").value;
	hora = document.getElementById("hora").value;
	trabajadas = document.getElementById("trabajadas").value;
	isr = document.getElementById("isr").value;
	imss = document.getElementById("imss").value;
	deducciones = document.getElementById("deducciones").value;
	neto = document.getElementById("neto").value;
	fiscal = document.getElementById("fiscal").value;
	cuenta = document.getElementById("cuenta").value;
	empleado = document.getElementById("empleado").value;

	if(folio === "" || empresa === "" || direccion === "" || rfc === "" || periodo === "" || fecha === "" || nombre === "" || curp === "" || pago === "" || normal === "" || hora === "" || trabajadas === "" || isr === "" || imss === "" || deducciones === "" || neto === "" || empleado === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(folio.lenght>12)
	{
		alert("El folio es demaciado largo")
		return false;
	}
	else if(isNaN(folio))
	{
		alert("El folio insertado es incorrecto")
		return false;
	}
	else if(empresa.lenght>50)
	{
		alert("El nombre de la empresa insertado es demaciado largo")
		return false;
	}
	else if(direccion.lenght>100)
	{
		alert("Su direccion contine demaciados caracteres")
		return false;
	}
	else if (rfc.lenght>20)
	{
		alert("El rfc contiene demaciados caracteres")
		return false;
	} 
	else if(periodo.lenght>20)
	{
		alert("El periodo contiene demaciados caracteres")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha contiene demaciados caracteres")
		return false;
	}
	else if(nombre.lenght>50)
	{
		alert("El nombre del empleado contiene demaciados caracteres")
		return false;
	}
	else if(curp.lenght>20)
	{
		alert("El curp contiene demaciados caracteres")
		return false;
	}
	else if(pago.lenght>30)
	{
		alert("El tipo de pago contiene demaciados caracteres")
		return false;
	}
	else if (isNaN(normal)) 
	{
		alert("El salario normal es incorreto")
		return false;
	}
	else if(normal.lenght>12)
	{
		alert("El salario normal contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(hora))
	{
		alert("El sueldo por hora es incorrecto")
		return false;
	}
	else if(hora.lenght>12)
	{
		alert("El salario por hora contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(trabajadas))
	{
		alert("Las horas trabajadas son incorrectas")
		return false;
	}
	else if(trabajadas.lenght>3)
	{
		alert("Las horas trabajasdas contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(isr))
	{
		alert("El descuento por isr el incorrecto")
		return false;
	}
	else if(isr.lenght>12)
	{
		alert("El descuento isr contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(imss))
	{
		alert("El descuento imss es incorrecto")
		return false;
	}
	else if (imss.lenght>12) 
	{
		alert("El descuento imss contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(deducciones))
	{
		alert("El total de deducciones es incorrecto")
		return false;
	}
	else if(deducciones.lenght>12)
	{
		alert("El total de deduccines contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(neto))
	{
		alert("El neto recibido es incorrecto")
		return false;
	}
	else if(neto.lenght>12)
	{
		alert("El neto recibido contiene demaciados caracteres")
		return false
	}
	else if(fiscal.lenght>12)
	{
		alert("El folio fiscal contiene demaciados caracteres")
		return false;
	}
	else if(cuenta.lenght>24)
	{
		alert("La cuenta contiene demaciados caracteres")
		return false;
	}
	else if(isNaN(empleado))
	{
		alert("El id del empleado es incorrecto")
		return false;
	}
	else if(empleado.lenght>12)
	{
		alert("El id del empleado contiene demaciados caracteres")
		return false;
	}

}
