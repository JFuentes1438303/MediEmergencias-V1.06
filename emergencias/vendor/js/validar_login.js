function validar() {

	var documento, password;

	documento = document.getElementById('doc').value;
	password = document.getElementById('pass').value;

	if (documento =="" || password=="") {
		alert("Todos los campos deben ser diligenciados");
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

	else if (isNaN(documento)) {
		alert("El numero de documento debe contener solo numeros");
		return false;
	}

	else if (password.length>25) {
		alert("La contraseña es demaciado larga");
		return false;
	}

	else if (password.length<10) {
		alert("La contraseña es demaciado corta");
		return false;
	}
}