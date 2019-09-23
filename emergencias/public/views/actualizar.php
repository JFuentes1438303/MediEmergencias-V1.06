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
      <script src="../../vendor/js/validar_doc.js"></script>
    </head>

  <body>

    <div class="d-flex" id="wrapper">

      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">

        <div style="text-align: center; border-bottom: 5px solid #818181; background: #000;">
            <a href="home.php">
              <img src="../../files/img/logoem2.jpg" style="width:240px; height: 61px">
            </a>
        </div>

        <div class="list-group list-group-flush">

          <a href="pacientes.php" class="list-group-item list-group-item-action enlaces">
            Informacion del paciente
          </a>

          <a href="historias.php" class="list-group-item list-group-item-action enlaces">
            Registrar historia clinica
          </a>

          <a href="buscar_historia.php" class="list-group-item list-group-item-action enlaces">
            Buscar historia clinica
          </a>

          <a href="triage.php" class="list-group-item list-group-item-action enlaces">
            Clasificacion de alertas 
          </a>

          <a href="actualizar.php" class="list-group-item list-group-item-action enlaces">
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

    	<div class="container div color2">
  			<div class="row color3">
        <div class="col-sm-3">
          <a href="home.php">
            <img src="../../files/img/logoem3.png" class="logo">
          </a>
        </div>
        <div class="col-sm-9 titulos">
          Actualizar informacion del usuario
        </div>  
      </div>

		    <form action="../models/actualizar.php" method="POST" onsubmit="return validacion();">
  				<div class="row espacio">
  					<div class="col-sm-5 espacio">
  						<label for="dpaciente" class="col-form-label" style="text-align: center;">
  							Ingrese su numero de documento:
  						</label>
  					</div>
  					<div class="col-sm-7 espacio" style="">
  						<input type="text" class="form-control inputs" id="dpaciente" placeholder="Ingrese documento" name="doc_perfil" autocomplete="off">
  					</div>
  				</div>
  				<div class="row espacio" style="justify-content: center;">
  					<button type="submit" class="btn btn-sm btn-outline-dark">Buscar</button>
  				</div>
        </form>
		  </div>

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
