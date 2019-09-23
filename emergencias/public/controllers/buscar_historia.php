<?php  
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

	    <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>MediEmergencias</title>
			<!-- Bootstrap core CSS -->
			<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<!-- Custom styles for this template -->
			<link href="../../css/simple-sidebar.css" rel="stylesheet">
			<link href="../../css/estilos.css" rel="stylesheet" >
			<script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
	    </head>

	<body>
		<div class="d-flex toggled" id="wrapper">
	      <!-- Sidebar -->
			<div class="border-right" id="sidebar-wrapper">

		        <div style="text-align: center; border-bottom: 5px solid #818181; background: #000;">
		            <a href="../views/home.php">
		              <img src="../../files/img/logoem2.jpg" style="width:240px; height: 61px">
		            </a>
		        </div>

	        <div class="list-group list-group-flush">

          <a href="../views/pacientes.php" class="list-group-item list-group-item-action enlaces">
            Informacion del paciente
          </a>

          <a href="../views/historias.php" class="list-group-item list-group-item-action enlaces">
            Registrar historia clinica
          </a>

          <a href="../views/buscar_historia.php" class="list-group-item list-group-item-action enlaces">
            Buscar historia clinica
          </a>

          <a href="../views/triage.php" class="list-group-item list-group-item-action enlaces">
            Clasificacion de alertas 
          </a>

          <a href="../views/actualizar.php" class="list-group-item list-group-item-action enlaces">
            Actualizar usuario 
          </a>

          <div class="enlaces2">
          </div>

          <a href="../models/cerrar_sesion.php" class="list-group-item list-group-item-action enlaces">
            Cerrar sesion 
          </a>


          <div style="text-align: center; padding: 4% 2%; background: #f2f2f2">
            <label for="">Ponte en contacto con nosotros</label>
            <i class="far fa-hand-point-down fa-2x"></i>
          </div>

          <div style="text-align: center; background: #f2f2f2; padding-bottom: 5%">
            <a href="https://wa.me/573197039293" target="blanck">
              <i class="fab fa-whatsapp fa-4x icono"></i>
            </a>
          </div>

          <div style="background: #f2f2f2; padding-bottom: 2%;  text-align: center; font-size: 11px">
            MediEmergencias<br>
            &copy; Todos los derechos reservados <br>
            2019
          </div>
        </div>
			</div>
	    <!-- /#sidebar-wrapper -->

	    <!-- Page Content -->
	    <div id="page-content-wrapper">

	      <nav class="navbar navbar-expand-lg color1" style="border-bottom: 5px solid #818181;">
	        <button class="btn boton_menu" id="menu-toggle">
	          <i class="fas fa-bars"></i>
	        </button>

	          <div class="perfil" style="margin-left: 1%;">
	            <?php 
	              echo "Bienvenido(a) ".$_SESSION["primer_nombre"]." ".$_SESSION["primer_apellido"];
	            ?>
	          </div>
	      </nav>

	    <div class="container-fluid">
<?php 
	class Historias{
		public function mostrar($doc_paciente){

			include("../models/conexion.php");

			$_SESSION["documento"] = $doc_paciente;

			$cont = "0";

			$sql = "SELECT * FROM historias_clinicas WHERE documento = '$doc_paciente'";

			if(!$result = $db ->query($sql)){
            	die ('Hay un error en la consulta [' .$db->error .']');
          	}

          	while ($row = $result -> fetch_assoc()) {
          		$ttipo_documento = stripcslashes($row["tipo_documento"]);
          		$ddocumento = stripcslashes($row["documento"]);
          		$eedad = stripcslashes($row["edad"]);
          		$nnombres = stripcslashes($row["nombres"]);
          		$aapellidos = stripcslashes($row["apellidos"]);
          		$ffecha_nacimiento = stripcslashes($row["fecha_nacimiento"]);
          		$cciudad = stripcslashes($row["ciudad"]);
          		$ddepartamento = stripcslashes($row["departamento"]);
          		$ddireccion = stripcslashes($row["direccion"]);
          		$ssexo = stripcslashes($row["sexo"]);
          		$oocupacion = stripcslashes($row["ocupacion"]);
          		$eestado_civil = stripcslashes($row["estado_civil"]);
          		$eentidad = stripcslashes($row["entidad"]);
          		$rregimen = stripcslashes($row["regimen"]);
          		$rregion = stripslashes($row["region"]);
          		$eescolaridad = stripslashes($row["escolaridad"]);
          		$ttriage = stripslashes($row["triage"]);
          		$ssintomas = stripcslashes($row["sintomas"]);
          		$eenfermedades = stripcslashes($row["enfermedades"]);
          		$aantecedentes = stripcslashes($row["antecedentes"]);
          		$aantecedentes_personales = stripcslashes($row["antecedentes_personales"]);
          		$ffisiologicos = stripslashes($row["fisiologicos"]);
          		$eexamenes = stripcslashes($row["examenes"]);

          		$cont = $cont + 1;
      		}

      		if ($cont == "0") {
      			include("../views/ad_historia.html");
      		}

      		if($cont != "0"){
?>
			<div class="container div2 color2">

				<div class="row color3">
					<div class="col-sm-2">
						<a href="../views/home.php">
						<img src="../../files/img/logoem3.png" class="logo">
						</a>
					</div>
					<div class="col-sm-9 titulos">
						HISTORIA CLINICA DEL PACIENTE
					</div>  
                </div>

                <div class="row espacio b_bottom">
                	<div class="col-sm-2 t_centro negrilla">
                		Tipo de documento
                	</div>
                	<div class="col-sm-2 t_centro">
            		<?php 
						$sql = "SELECT tp.tipo_documento FROM historias_clinicas AS hc INNER JOIN tipo_documento as tp ON hc.tipo_documento = tp.id_tipo_documento WHERE documento = $doc_paciente";

						if(!$result = $db ->query($sql)){
							die ('Hay un error en la consulta [' .$db->error .']');
						}

						while($row = $result->fetch_assoc()){
							$ttipo_documento = stripcslashes($row["tipo_documento"]);
						}

						echo $ttipo_documento;
					?>
                	</div>
                	<div class="col-sm-2 t_centro negrilla">
                		Documento
                	</div>
                	<div class="col-sm-2 t_centro">
                		<?php echo $ddocumento ?>
                	</div>
                	<div class="col-sm-2 t_centro negrilla">
                		Nivel de alerta
                	</div>
                	<div class="col-sm-2 t_centro">
            		<?php
						$sql = "SELECT tri.triage FROM historias_clinicas AS hc INNER JOIN triage AS tri ON hc.triage = tri.id_triage WHERE documento = '$doc_paciente'";

						if(!$result = $db ->query($sql)){
							die ('Hay un error en la consulta [' .$db->error .']');
						}

						while($row = $result->fetch_assoc()){
							$ttriage = stripcslashes($row["triage"]);
						}

						echo $ttriage;
					?>
                	</div>
                </div>

                <div class="row espacio b_bottom">
                	<div class="col-sm-2 t_centro negrilla">
                		Nombres
                	</div>
                	<div class="col-sm-2 t_centro">
                		<?php echo $nnombres ?>
                	</div>
                	<div class="col-sm-2 t_centro negrilla">
                		Apellidos
                	</div>
                	<div class="col-sm-2 t_centro">
                		<?php echo $aapellidos ?>
                	</div>
                	<div class="col-sm-1 t_centro negrilla">
                		Edad
                	</div>
                	<div class="col-sm-1 t_centro">
                		<?php echo $eedad ?>
                	</div>
                	<div class="col-sm-1 t_centro negrilla">
                		Sexo
                	</div>
                	<div class="col-sm-1 t_centro">
            		<?php
						$sql = "SELECT sx.sexo FROM historias_clinicas AS hc INNER JOIN sexo AS sx ON hc.sexo = sx.id_sexo WHERE documento = '$doc_paciente'";

						if(!$result = $db ->query($sql)){
							die ('Hay un error en la consulta [' .$db->error .']');
						}

						while($row = $result->fetch_assoc()){
							$ssexo = stripcslashes($row["sexo"]);
						}

						echo $ssexo;
					?>
                	</div>
                </div>

                <div class="row espacio b_bottom">
                	<div class="col-sm-2 t_centro negrilla">
                		Fecha de nacimiento
                	</div>
                	<div class="col-sm-2 t_centro">
                		<?php echo $ffecha_nacimiento ?>
                	</div>
                	<div class="col-sm-2 t_centro negrilla">
                		Estado civil
                	</div>
                	<div class="col-sm-1 t_centro">
            		<?php
						$sql = "SELECT es.estado_civil FROM historias_clinicas AS hc INNER JOIN estado_civil AS es ON hc.estado_civil = es.id_estado_civil WHERE documento = '$doc_paciente'";

						if(!$result = $db ->query($sql)){
							die ('Hay un error en la consulta [' .$db->error .']');
						}

						while($row = $result->fetch_assoc()){
							$eestado_civil = stripcslashes($row["estado_civil"]);
						}

						echo $eestado_civil;
					?>
                	</div>
                	<div class="col-sm-2 t_centro negrilla">
                		Ocupacion
                	</div>
                	<div class="col-sm-3 t_centro">
                		<?php echo $oocupacion ?>
                	</div>
				</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-2 t_centro negrilla">
            			Departamento
            		</div>
            		<div class="col-sm-2 t_centro">
            			<?php echo $ddepartamento ?>
            		</div>
            		<div class="col-sm-1 t_centro negrilla">
            			Ciudad
            		</div>
            		<div class="col-sm-2 t_centro">
            			<?php echo $cciudad ?>
            		</div>
            		<div class="col-sm-1 t_centro negrilla">
            			Direccion
            		</div>
            		<div class="col-sm-4 t_centro">
            			<?php echo $ddireccion ?>
            		</div>
            	</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-1 t_centro negrilla">
            			Region
            		</div>
            		<div class="col-sm-1 t_centro">
        			<?php
						$sql = "SELECT r.region FROM historias_clinicas AS hc INNER JOIN region AS r ON hc.region = r.id_region WHERE documento = '$doc_paciente'";

						if(!$result = $db ->query($sql)){
							die ('Hay un error en la consulta [' .$db->error .']');
						}

						while($row = $result->fetch_assoc()){
							$rregion = stripcslashes($row["region"]);
						}

						echo $rregion;
					?>	
            		</div>
            		<div class="col-sm-1 t_centro negrilla">
            			Regimen
            		</div>
            		<div class="col-sm-1 t_centro">
        			<?php
						$sql = "SELECT r.regimen FROM historias_clinicas AS hc INNER JOIN regimen AS r ON hc.regimen = r.id_regimen WHERE documento = '$doc_paciente'";

						if(!$result = $db ->query($sql)){
							die ('Hay un error en la consulta [' .$db->error .']');
						}

						while($row = $result->fetch_assoc()){
							$rregimen = stripcslashes($row["regimen"]);
						}

						echo $rregimen;
					?>	
            		</div>
            		<div class="col-sm-2 t_centro negrilla">
            			Entidad
            		</div>
            		<div class="col-sm-2 t_centro">
            			<?php echo $eentidad ?>
            		</div>
            		<div class="col-sm-2 t_centro negrilla">
            			Nivel de escolaridad
            		</div>
            		<div class="col-sm-2 t_centro">
            			<?php echo $eescolaridad ?>
            		</div>
            	</div>

            	<div class="row negrilla espacio color3" style="border-bottom: 1px solid #000; border-top: 1px solid #000">
            		<div class="col-sm-12 th">ANAMNESIS</div>
            	</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-4 t_centro negrilla">
            			Sintomas
            		</div>
            		<div class="col-sm-8 t_centro">
            			<?php echo $ssintomas ?>
            		</div>
            	</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-4 t_centro negrilla">
            			Enfermedad(es) actual(es)
            		</div>
            		<div class="col-sm-8 t_centro">
            			<?php echo $eenfermedades ?>
            		</div>
            	</div>

            	<div class="row negrilla espacio color3" style="border-bottom: 1px solid #000; border-top: 1px solid #000">
            		<div class="col-sm-12 th">
            			ANTECEDENTES HEREDOFAMILIARES
            		</div>
            	</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-4 t_centro negrilla">
            			Enfermedades heredadas
            		</div>
            		<div class="col-sm-8 t_centro">
            			<?php echo $aantecedentes ?>
            		</div>
            	</div>

            	<div class="row negrilla espacio color3" style="border-bottom: 1px solid #000; border-top: 1px solid #000">
            		<div class="col-sm-12 th">
            			ANTECEDENTES PERSONALES
            		</div>
            	</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-4 t_centro negrilla">
            			Habitos toxicos
            		</div>
            		<div class="col-sm-8 t_centro">
            			<?php echo $aantecedentes_personales ?>
            		</div>
            	</div>

            	<div class="row espacio b_bottom">
            		<div class="col-sm-3 t_centro negrilla">
            			Fisiologicos
            		</div>
            		<div class="col-sm-3 t_centro">
            			<?php echo $ffisiologicos ?>
            		</div>
            		<div class="col-sm-3 t_centro negrilla">
            			Examenes
            		</div>
            		<div class="col-sm-3 t_centro">
            			<?php echo $eexamenes ?>
            		</div>
            	</div>
				<br>
            	<div class="row centro espacio">
            		<a href="../views/home.php" class="btn btn-sm btn-outline-dark">Volver</a>
            	</div>
            	<br>
			</div>
			<br>
			<br>
<?php    		
      		}
		}
	}	

	$nuevo = new Historias();
	$nuevo -> mostrar($_POST["dpaciente"]);
?>
		<!-- Bootstrap core JavaScript -->
		<script src="../../vendor/jquery/jquery.min.js"></script>
		<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		  <!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
			  e.preventDefault();
			  $("#wrapper").toggleClass("toggled");
			});
		</script>

	</body>
</html>

