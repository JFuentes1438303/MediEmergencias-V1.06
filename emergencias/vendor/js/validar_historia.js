function validar() {

	var tdocumento;
	var documento;
	var edad;
	var nombres;
	var apellidos;
	var fnacimiento;
	var ciudad;
	var departamento;
	var direccion;
	var sexo;
	var ocupacion;
	var ecivil;
	var entidad;
	var regimen;
	var region;
	var escolaridad;
	var triage;
	var sintomas;
	var enfermedades;
	var antecedentes;
	var habitos;
	var fisiologicos;
	var examenes;

	tdocumento = document.getElementById('tdocumento').value;
	documento = document.getElementById('documento').value;
	edad = document.getElementById('edad').value;
	nombres = document.getElementById('nombres').value;
	apellidos = document.getElementById('apellidos').value;
	fnacimiento = document.getElementById('fnacimiento').value;
	ciudad = document.getElementById('ciudad').value;
	departamento = document.getElementById('departamento').value;
	direccion = document.getElementById('direccion').value;
	sexo = document.getElementById('sexo').value;
	ocupacion = document.getElementById('ocupacion').value;
	ecivil = document.getElementById('ecivil').value;
	entidad = document.getElementById('entidad').value;
	regimen = document.getElementById('regimen').value;
	region = document.getElementById('region').value;
	escolaridad = document.getElementById('escolaridad').value;
	triage = document.getElementById('triage').value;
	sintomas = document.getElementById('sintomas').value;
	enfermedades = document.getElementById('enfermedades').value;
	antecedentes = document.getElementById('antecedentes').value;
	habitos = document.getElementById('toxico').value;
	fisiologicos = document.getElementById('fisiologicos').value;
	examenes = document.getElementById('examenes').value;

	if (tdocumento=="Seleccione.." || documento=="" || edad=="" || nombres=="" || apellidos=="" || fnacimiento=="" || ciudad=="" || departamento=="" || direccion=="" || sexo=="Seleccione.." || ocupacion=="" || ecivil=="Seleccione.." || entidad=="" || regimen=="Seleccione.." || region=="Seleccione.." || escolaridad=="" || triage=="Seleccione.." || sintomas=="" || enfermedades=="" || antecedentes=="" || habitos=="" || fisiologicos=="" || examenes=="") {
		alert("Todos los campos deben ser diligenciados");
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

	else if (isNaN(edad)) {
		alert("La edad debe contener solo numeros");
		return false;
	}

	else if (edad.length>2) {
		alert("La edad ingresada en muy larga");
		return false;
	}

	else if (nombres.length>15) {
		alert("los nombres ingresados son muy largos");
		return false;
	}

	else if (nombres.length<3) {
		alert("los nombres ingresados son muy cortos");
		return false;
	}

	else if (apellidos.length>20) {
		alert("Los apellidos ingresados son muy largos");
		return false;
	}

	else if (apellidos.length<8) {
		alert("Los apellidos ingresados son muy cortos");
		return false;
	}

	else if (ciudad.length>16) {
		alert("La ciudad ingresada es muy larga");
		return false;
	}

	else if (ciudad.length<4) {
		alert("La ciudad ingresada es muy corta");
		return false;
	}

	else if (departamento.length>18) {
		alert("El departamento ingresado es muy largo");
		return false;
	}

	else if (departamento.length<4) {
		alert("El departamento ingresado es muy corot");
		return false;
	}

	else if (direccion.length>30) {
		alert("La direccion ingresada es muy larga");
		return false;
	}

	else if (direccion.length<15) {
		alert("La direccion ingresada es muy corta");
		return false;
	}

	else if (ocupacion.length>38) {
		alert("La ocupacion ingresada es muy larga");
		return false;
	}

	else if (ocupacion.length<4) {
		alert("La ocupacion ingresada es muy corta");
		return false;
	}

	else if (entidad.length>58) {
		alert("La entidad ingresada en muy larga");
		return false;
	}

	else if (entidad.length<7) {
		alert("La entidad ingresada en muy corta");
		return false;
	}

	else if (escolaridad.length>20) {
		alert("La escolaridad ingresada en muy larga");
		return false;
	}

	else if (escolaridad.length<7) {
		alert("La escolaridad ingresada es muy corta");
		return false;
	}

	else if (sintomas.length>100) {
		alert("Los sintomas ingresados superan los caracteres permitidos (100)");
		return false;
	}

	else if (sintomas.length<10) {
		alert("Los sintomas ingresados no superan el minimo de caracteres permitidos");
		return false;
	}

	else if (enfermedades.length>100) {
		alert("La(s) enfermedad(es) actual(es) ingresadas superan los caracteres permitidos (100)");
		return false;
	}

	else if (enfermedades.length<4) {
		alert("La(s) enfermedad(es) actual(es) ingresadas no superan el minimo de caracteres permitidos");
		return false;
	}

	else if (antecedentes.length>100) {
		alert("Las enfermedades heredadas superan los caracteres permitidos (100)");
		return false;
	}

	else if (antecedentes.length<4) {
		alert("Las enfermedades heredadas no superan el minimo de caracteres permitidos");
		return false;
	}

	else if (fisiologicos.length>100) {
		alert("Los fisiologicos ingresados superan los caracteres permitidos (100)");
		return false;
	}

	else if (fisiologicos.length<7) {
		alert("Los fisiologicos ingresados no superan el minimo de caracteres permitidos");
		return false;
	}

	else if (examenes.length>100) {
		alert("Los examenes ingresados superan los caracteres permitidos (100)");
		return false;
	}

	else if (examenes.length<7) {
		alert("Los examenes ingresados no superan el minimo de caracteres permitidos");
		return false;
	}





}