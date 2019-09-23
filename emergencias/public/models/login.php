<?php  

	class Login{
		public function validar($documento, $password){

			session_start();
			include ("conexion.php");

			$sql = "SELECT * FROM usuario_paciente WHERE documento = '$documento'";

				$cont = "0";

				if(!$result = $db ->query($sql)){
					die ('Ya existe un registro con ese documento [' .$db->error .']');
				}

				while($row = $result->fetch_assoc()){
		 			$ddocumento = stripcslashes($row["documento"]);
		 			$ppassword = stripcslashes($row["password"]);
		 			$pprimer_nombre = stripcslashes($row["primer_nombre"]);
		 			$pprimer_apellido = stripcslashes($row["primer_apellido"]);

		 			$cont = $cont + 1;

		 			$_SESSION["primer_nombre"] = $pprimer_nombre;
 					$_SESSION["primer_apellido"] = $pprimer_apellido;
		 		}

		 		if ($cont != "0" && $ppassword == $password) {

 					$_SESSION["documento"] = $ddocumento;
 					$_SESSION["usuario"] = "1";
		 			header("Location: ../views/home.php");
		 		}else{

		 			include("../views/adanger_login.html");
		 		}
		}
	}

	$nuevo = new Login();
	$nuevo -> validar($_POST["documento"], $_POST["password"]);

?>