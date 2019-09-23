<?php 
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index.php");
  }
 

	class Historias{
		public function diligenciar($tdocumento, $documento, $edad, $nombres, $apellidos, $fnacimiento, $ciudad, $departamento, $direccion, $sexo, $ocupacion, $ecivil, $entidad, $regimen, $region, $escolaridad, $triage, $sintomas, $enfermedad, $antecedentes, $toxico, $fisiologicos, $examenes){

			include("conexion.php");

			$cont = "0";

			include("../views/a_success.html");

			$sql = "INSERT INTO historias_clinicas (tipo_documento, documento, edad, nombres, apellidos, fecha_nacimiento, ciudad, departamento, direccion, sexo, ocupacion, estado_civil, entidad, regimen, region, escolaridad, triage, sintomas, enfermedades, antecedentes, antecedentes_personales, fisiologicos, examenes) VALUES ('$tdocumento', '$documento', '$edad', '$nombres', '$apellidos', '$fnacimiento', '$ciudad', '$departamento', '$direccion', '$sexo', '$ocupacion', '$ecivil', '$entidad', '$regimen', '$region', '$escolaridad', '$triage', '$sintomas', '$enfermedad', '$antecedentes', '$toxico', '$fisiologicos', '$examenes')";

			if(!$result = $db->query($sql)){
 					die('Hay un error corriendo en la consulta [' . $db->error . ']');
			}
		}
	}

	$nuevo = new Historias();
	$nuevo -> diligenciar($_POST["tdocumento"], $_POST["documento"], $_POST["edad"], $_POST["nombres"], $_POST["apellidos"], $_POST["fnacimiento"], $_POST["ciudad"], $_POST["departamento"], $_POST["direccion"], $_POST["sexo"], $_POST["ocupacion"], $_POST["ecivil"], $_POST["entidad"], $_POST["regimen"], $_POST["region"], $_POST["escolaridad"], $_POST["triage"], $_POST["sintomas"], $_POST["enfermedades"], $_POST["antecedentes"], $_POST["toxico"], $_POST["fisiologicos"], $_POST["examenes"],);

?>