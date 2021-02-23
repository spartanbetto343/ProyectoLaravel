function validar1()
{
	var codigo, mobiliario, id_empleado, fecha, marca, color, tamano, almacenamiento, placa, ram, procesador, monitor, teclado, mouse
	codigo = document.getElementById("codigo").value;
	mobiliario = document.getElementById("mobiliario").value;
	id_empleado = document.getElementById("id_empleado").value;
	fecha = document.getElementById("fecha").value;
	marca = document.getElementById("marca").value;
	color = document.getElementById("color").value;
	tamano = document.getElementById("tamano").value;
	placa = document.getElementById("placa").value;
	almacenamiento = document.getElementById("almacenamiento").value;
	ram = document.getElementById("ram").value;
	procesador = document.getElementById("procesador").value;
	monitor = document.getElementById("monitor").value;
	teclado = document.getElementById("teclado").value;
	mouse = document.getElementById("mouse").value;
	
	if (codigo === "" || mobiliario === "" || id_empleado === "" || fecha === "" || marca === "")
	{
		alert ("Faltan campos por llenar")
		return false;
	}
	else if(isNaN(codigo))
	{
		alert("El codigo insertado es incorrecto")
		return false;
	}
	else if(codigo.lenght>10)
	{
		alert("El codigo es demaciado largo")
		return false;
	}
	else if(mobiliario.lenght>50)
	{
		alert("El nombre es demaciado largo")
		return false;
	}
	else if(isNaN(id_empleado))
	{
		alert("El id insertado es incorrecto")
		return false;
	}
	else if(id_empleado.lenght>12)
	{
		alert("El id es demaciado largo")
		return false;
	}
	else if(fecha.lenght>12)
	{
		alert("La fecha es demaciado larga")
		return false;
	}
	else if (marca.lenght>50) 
	{
		
		alert("El nombre de la marca es demaciado largo")
		return false;
	}
	else if (color.lenght>50) 
	{
		alert("El nombre del color es demaciado largo")
		return false;
	}
	else if(tamano.lenght>50)
	{
		alert("El tamaño es demaciado largo")
		return false;
	}
	else if (almacenamiento.lenght>50) 
	{
		alert("El almaceamiento esta incorrecto")
		return false;
	}
	else if(placa.lenght>50)
	{
		alert("El nombre de la placa es demaciado largo")
		return false;
	}
	else if(ram.lenght>50)
	{
		alert("La cantidad de RAM es incorrecta")
		return false;
	}
	else if(procesador.lenght>50)
	{
		alert("El nombre del procesador es demaciado largo")
		return false;
	}
	else if(monitor.lenght>50)
	{
		alert("El nombre del monitor es demaciado largo")
		return false;
	}
	else if (teclado.lenght>50) 
	{
		alert("El nombre del teclado es demaciado largo")
		return false;
	}
	else if (mouse.lenght>50) 
	{
		alert("El nombre del teclado es demaciado largo")
		return false;
	}
}	
