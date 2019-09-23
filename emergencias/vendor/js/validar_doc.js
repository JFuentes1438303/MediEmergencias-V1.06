function validacion() {

	var doc_paciente

	doc_paciente = document.getElementById("dpaciente").value;

	if (doc_paciente ==="") {
		alert("Debe ingresar el documento del paciente");
		return false;
	}

	else if (doc_paciente.length>15) {
		alert("El numero de documento es muy largo");
		return false;
	}

	else if (doc_paciente.length<7) {
		alert("El numero de documento es muy corto");
		return false;
	}

	else if (isNaN(doc_paciente)) {
		alert("El numero de documento debe contener solo numeros");
		return false;
	}
}