<?php  

	class Registro{
		public function registrar($tdocumento, $ndocumento, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $direccion, $fnacimiento, $sexo, $telefono, $password){

			include("conexion.php");

			$cont="0";

			$sql = "SELECT * FROM usuario_paciente WHERE documento = '$ndocumento'";

			if(!$result = $db ->query($sql)){
				die ('Ya existe un registro con ese documento [' .$db->error .']');
			}

	 		while($row = $result->fetch_assoc()){
	 			$nndocumento = stripcslashes($row["documento"]);
	 			$cont = $cont+1;
	 		}

	 		if ($cont == "0") {

	 			include("../views/alertas.html");
	 			
	 			$sql2 = "INSERT INTO usuario_paciente (tipo_documento, documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, sexo, fecha_nacimiento, direccion, telefono, password) VALUES ('$tdocumento', '$ndocumento', '$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', '$sexo', '$fnacimiento', '$direccion', '$telefono', '$password')";

 				if(!$result2 = $db->query($sql2)){
 					die('Hay un error corriendo en la consulta [' . $db->error . ']');
				}

	 		}else{
	 			include("../views/alertad.html");
	 		}
		}
	}

	$nuevo = new Registro();
	$nuevo -> registrar($_POST["tdocumento"], $_POST["ndocumento"], $_POST["primerNombre"], $_POST["segundoNombre"], $_POST["primerApellido"], $_POST["segundoApellido"], $_POST["direccion"], $_POST["fnacimiento"], $_POST["sexo"], $_POST["telefono"], $_POST["password"]);

?>