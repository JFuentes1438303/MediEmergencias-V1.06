function validar() {

	var documento, p_nombre, p_apellido, npass, cpass

	documento = document.getElementById('doc').value;
	p_nombre = document.getElementById('pnombre').value;
	p_apellido = document.getElementById('papellido').value;
	npass = document.getElementById('npass').value;
	cpass = document.getElementById('cpass').value;

	if (documento=="" || p_nombre=="" || p_apellido=="" || npass=="" || cpass=="") {
		alert("Los los campos deben ser diligenciados");
		return false;
	}

	else if (isNaN(documento)) {
		alert("El numero de documento debe contener solo numeros");
		return false;
	}

	else if (documento.length>11) {
		alert("El numero de documento es muy largo");
		return false;
	}

	else if (documento.length<7) {
		alert("El numero de documento es muy corto");
		return false;
	}

	else if (p_nombre.length>15) {
		alert("El nombre ingresado es muy largo");
		return false;
	}

	else if (p_nombre.length<3) {
		alert("El nombre ingresado es muy corto");
		return false;
	}

	else if (p_apellido.length>15) {
		alert("El apellido ingresado es muy largo");
		return false;
	}

	else if (p_apellido.length<3) {
		alert("El apellido ingresado es muy corto");
		return false;
	}

	else if (npass.length>25 || cpass.length>25) {
		alert("La contraseña es demaciado larga maximo 25 caracteres");
		return false;
	}

	else if (npass.length<10 || cpass.length<10) {
		alert("La contraseña es demaciado corta minimo 10 caracteres");
		return false;
	}

	else if (npass != cpass) {
		alert("Las contraseñas no coinciden");
		return false;
	}	
}