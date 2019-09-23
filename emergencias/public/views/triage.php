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

      <div class="container div2" style="background: skyblue">
        <div class="row color3">
          <div class="col-sm-2">
            <a href="home.php">
              <img src="../../files/img/logoem3.png" class="logo">
            </a>
          </div>
          <div class="col-sm-10 titulos">
            Clasificacion de triages
          </div>  
        </div>

        <div class="row" style="background: red">
          <div class="col-sm-2" style="text-align: center; margin-top: 2.5%;">
            <label for="">Triage 1</label>
          </div>
          <div class="col-sm-10" style="padding: 5px 20px">
            <label for="" class="text-justify">
              Requiere atención inmediata. La condición del paciente representa un un riesgo vital y necesita maniobras de reanimación por su compromiso ventilatorio. respiratorio, hemodinamico o neurológico, perdida de miembro u órgano u otras condiciones que por norma exigen atención inmediata.
            </label>
          </div>
        </div>

        <div class="row" style="background: orange">
          <div class="col-sm-2" style="text-align: center; margin-top: 2.5%;">
            <label for="">Triage 2</label>
          </div>
          <div class="col-sm-10" style="padding: 5px 20px">
            <label for="" class="text-justify">
              La condición clínica del paciente pude evolucionar hasta un rápido deterioro o a su muerte, o incrementar el riesgo para la perdida de un miembro u órgano por lo tanto, requiere una atención que no debe superar los 30 minutos. La presencia de un dolor extremo de acuerdo con el sistema de clasificación usado debe ser considerado como un criterio dentro de esta categoría.
            </label>
          </div>
        </div>

        <div class="row" style="background: yellow">
          <div class="col-sm-2" style="text-align: center; margin-top: 2.5%;">
            <label for="">Triage 3</label>
          </div>
          <div class="col-sm-10" style="padding: 5px 20px">
            <label for="" class="text-justify">
              La condición clínica del paciente requiere de medidas diagnosticas y terapéuticas en urgencias. Son aquellos pacientes que necesitan un examen complementario o un tratamiento rápido, dado que se encuentran estables desde el punto de vista fisiológico aunque su situación puede empeorar si no se actúa. 
            </label>
          </div>
        </div>

        <div class="row" style="background: green">
          <div class="col-sm-2" style="text-align: center; margin-top: 2.5%;">
            <label for="">Traige 4</label>
          </div>
          <div class="col-sm-10" style="padding: 5px 20px">
            <label for="" class="text-justify">
              El paciente presenta condiciones medicas que no comprometen su estado general, ni representan un riesgo evidente para la vida o perdida de miembro u órgano. No obstante, existen riesgos de complicación o secuelas de la enfermedad o lesión si no recibe la atención correspondiente.
            </label>
          </div>
        </div>

        <div class="row" style="background: skyblue">
          <div class="col-sm-2" style="text-align: center; margin-top: 2.5%;">
            <label for="">Traige 5</label>
          </div>
          <div class="col-sm-10" style="padding: 5px 20px">
            <label for="" class="text-justify">
              El paciente presenta una condición clínica relacionada con problemas agudos o crónicos sin evidencia de deterioro que comprometa el estado general del paciente y no representa un riesgo evidente para la vida o la funcionalidad de miembro u órgano. 
            </label>
          </div>
        </div>
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
