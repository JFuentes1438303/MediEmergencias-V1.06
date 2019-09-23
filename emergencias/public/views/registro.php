<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Registro MediEmergencias</title>
		<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/simple-sidebar.css" rel="stylesheet">
	  	<link href="../../css/estilos.css" rel="stylesheet">
	  	<link href="" rel="shortcut icon">
	  	<script src="../../vendor/js/validar.js"></script>	
	</head>

	<body>
			
		<div class="container div2 color2">
			<div class="row color3">
				<div class="col-sm-3">
					<img src="../../files/img/logoem3.png" class="logo">
				</div>
				<div class="col-sm-9 titulos">
					Formulario de registro
				</div>	
			</div>

			<form action="../models/registro.php" method="POST" onsubmit="return validar();">

				<div class="row espacio">
					<div class="col-sm-2 t_centro">
						<label for="tdocumento" class="col-form-label">Tipo de documento</label>
					</div>
					
					<div class="col-sm-4">
						<?php  
							include("../models/tipo_documento.php");
						?>
					</div>

					<div class="col-sm-2 t_centro">
						<label for="ndocumento" class="col-form-label font">Numero de documento</label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control inputs" id="ndocumento" placeholder="documento.." name="ndocumento" >
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-2 t_centro">
						<label for="pNombre" class="col-form-label">Primer nombre</label>
					</div>
					<div class="col-sm-4" style="">
						<input type="text" class="form-control inputs" id="pNombre" placeholder="primer nombre" name="primerNombre">
					</div>

					<div class="col-sm-2 t_centro">
						<label for="sNombre" class="col-form-label">Segundo nombre</label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control inputs" id="sNombre" placeholder="segundo nombre" name="segundoNombre">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-2 t_centro">
						<label for="pApellido" class="col-form-label">Primer apellido</label>
					</div>
					<div class="col-sm-4" style="">
						<input type="text" class="form-control inputs" id="pApellido" placeholder="primer apellido" name="primerApellido">
					</div>

					<div class="col-sm-2 t_centro">
						<label for="sApellido" class="col-form-label">Segundo apellido</label>
					</div>
					<div class="col-sm-4" style="">
						<input type="text" class="form-control inputs" id="sApellido" placeholder="segundo apellido" name="segundoApellido">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-2 t_centro">
						<label for="direccion" class="col-form-label">Direccion</label>
					</div>
					<div class="col-sm-4 t_Centro">
						<input type="text" class="form-control inputs" id="direccion" placeholder="Ingrese direccion" name="direccion">
					</div>
					<div class="col-sm-2 t_centro">
						<label for="fnacimiento" class="col-form-label">Fecha de nacimiento</label>
					</div>
					<div class="col-sm-4" style="">
						<input type="date" class="form-control inputs" id="fnacimiento" placeholder="Ingrese fecha de nacimiento" name="fnacimiento">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-2 t_centro">
						<label for="sexo" class="col-form-label">Sexo</label>
					</div>
					<div class="col-sm-4 " style="">
						<?php  
							include("../models/sexo.php");
						?>
					</div>
					<div class="col-sm-2 t_centro">
						<label for="telefono" class="col-form-label">Telefono</label>
					</div>
					<div class="col-sm-4 ">
						<input type="text" class="form-control inputs" id="telefono" placeholder="Ingrese telefono" name="telefono">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-2 t_centro">
						<label for="password" class="col-form-label">Contraseña</label>
					</div>
					<div class="col-sm-10 ">
						<input type="password" class="form-control " id="password" placeholder="Ingrese contraseña" name="password">
					</div>
				</div>

				<div class="row espacio" style="justify-content: center;">
          			<input type="submit" class="btn btn-sm btn-outline-dark" value="Registrarse"></input>
        		</div>

        		<div class="row espacio" style="justify-content: center;">
        			<a href="../../index.php" class="btn btn-sm btn-outline-danger">Volver</a>
        		</div>
        		<br>
			</form>

		</div>
		<br>
		<br>
		<br>
		<br>

		

		<script src="../../vendor/jquery/jquery.min.js"></script>
      	<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>