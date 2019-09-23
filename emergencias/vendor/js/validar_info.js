function validar() {

	var p_nombre,
		s_nombre,
		p_apellido,
		s_apellido,
		direccion,
		telefono;

		p_nombre = document.getElementById("pNombre").value;
		s_nombre = document.getElementById("sNombre").value;
		p_apellido = document.getElementById("pApellido").value;
		s_apellido = document.getElementById("sApellido").value;
		direccion = document.getElementById("direccion").value;
		telefono = document.getElementById("telefono").value;

		if (p_nombre ==="" || p_apellido ==="" || s_apellido ==="" || direccion ==="" || telefono ==="") {
			alert("Todos los campos deben ser diligenciados");
			return false;
		}

		else if (p_nombre.length>15 || s_nombre.length>15) {
			alert("Los nombres ingresados son muy largos");
			return false;
		}

		else if (p_nombre.length<3) {
			alert("Los nombres ingresados son muy cortos");
			return false;
		}

		else if (p_apellido.length>15 || s_apellido.length>15) {
			alert("Los apellidos ingresados son muy largos");
			return false;
		}

		else if (p_apellido.length<3 || s_apellido.length<3) {
			alert("Los apellidos ingresados son muy cortos");
			return false;
		}

		else if (telefono.length>10) {
			alert("El numero de telefono ingresado es muy largo");
			return false;
		}

		else if (telefono.length<7) {
			alert("El numero de telefono ingresado es muy corto");
			return false;
		}

		else if (isNaN(telefono)) {
			alert("El telefono debe contener solo numeros");
			return false;
		}

		else if (direccion.length>30) {
			alert("La direccion ingresada es muy larga");
			return false;
		}

		else if (direccion.length<20) {
			alert("La direccion ingresada es muy corta");
			return false;
		}
}