<?php  

	class Contraseña{
		public function reestablecer($documento, $primer_nombre, $primer_apellido, $nueva_password, $conf_password){

      		include("conexion.php");

      		$sql ="SELECT * FROM usuario_paciente";

      		if(!$result = $db ->query($sql)){
                die ('Hay un error en la consulta [' .$db->error .']');
          	}

          	while ($row = $result -> fetch_assoc()) {
          		$ddocumento = stripcslashes($row["documento"]);
          		$pprimer_nombre = stripcslashes($row["primer_nombre"]);
          		$pprimer_apellido = stripcslashes($row["primer_apellido"]);
          		$ppassword = stripcslashes($row["password"]);
      		}

			if ($documento == $ddocumento && $primer_nombre == $pprimer_nombre && $primer_apellido == $pprimer_apellido && $nueva_password == $conf_password) {
				
				$sql2 = "UPDATE usuario_paciente SET password = '$nueva_password' WHERE documento = '$documento'";

				if(!$result2 = $db ->query($sql2)){
                	die ('Hay un error en la consulta [' .$db->error .']');
              	}

              	include("../views/as_reestablecer.html");
			}else{

				include("../views/ad_reestablecer.html");
			}
		}
	}

		$nuevo = new Contraseña();
        $nuevo->reestablecer($_POST["documento"], $_POST["primer_nombre"], $_POST["primer_apellido"], $_POST["nueva_password"], $_POST["conf_password"]); 
?>