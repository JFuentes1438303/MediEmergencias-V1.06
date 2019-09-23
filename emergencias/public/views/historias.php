<?php 
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap core CSS -->
      <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="../../css/simple-sidebar.css" rel="stylesheet">
      <link href="../../css/estilos.css" rel="stylesheet" >
      <script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
      <script src="../../vendor/js/validar_historia.js"></script>
      <title>Registrar Historia</title>
    </head>

  <body>
    
    <div class="d-flex toggled" id="wrapper">
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
          
        <div class="container div2 color2">
          <div class="row color3">
                  <div class="col-sm-2">
                    <a href="home.php">
                      <img src="../../files/img/logoem3.png" class="logo">
                    </a>
                  </div>
                  <div class="col-sm-10 titulos">
                    Diligenciamiento de historia clinica.
                  </div>  
              </div>

              <form action="../models/historias.php" method="POST" onsubmit="return validar();">
                <div class="row">
                    <div class="col-sm-12" style="text-align: center; margin-top: 1%">
                        <h5>Datos personales del paciente</h5>
                    </div>
                  </div>
            
            <div class="row espacio2">

                    <div class="col-sm-2">
                        <label for="tdocumento" class="col-form-label">Tipo de documento:</label>
                    </div>
                    <div class="col-sm-2">
                <?php  
                  include("../models/tipo_documento.php");
                ?>
                    </div>
                    <div class="col-sm-3">
                        <label for="documento" class="col-form-label">Numero de documento:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="documento" id="documento" class="form-control inputs" placeholder="documento..">
                    </div>
                    <div class="col-sm-1">
                        <label for="edad" class="col-form-label">Edad:</label>
                    </div>
                    <div class="col-sm-1" style="">
                        <input type="text"  name="edad" id="edad" class="form-control inputs" placeholder="edad..">
                    </div>
                  </div>

                  <div class="row espacio2">
              <div class="col-sm-1">
                <label for="nombres" class="col-form-label">Nombres:</label>
              </div>

              <div class="col-sm-3">
                <input type="text" name="nombres" id="nombres" class="form-control inputs" placeholder="nombres..">
              </div>

              <div class="col-sm-1">
                <label for="apellidos" class="col-form-label">Apellidos:</label>
              </div>

              <div class="col-sm-3">
                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="apellidos..">
              </div>

              <div class="col-sm-2">
                <label for="fnacimiento" class="col-form-label">Fecha de nacimiento:</label>
              </div>

              <div class="col-sm-2">
                <input type="date" name="fnacimiento" id="fnacimiento" class="form-control inputs" placeholder="fecha de nacimiento..">
              </div>
            </div>

            <div class="row espacio2">
                    <div class="col-sm-1">
                        <label for="ciudad" class="col-form-label">Ciudad:</label>
                    </div>

                    <div class="col-sm-3">
                      <input type="text" name="ciudad" id="ciudad" class="form-control inputs" placeholder="ciudad..">
                    </div>

                    <div class="col-sm-1">
                        <label for="departamento" class="col-form-label" style="margin-left: -20%">Departamento:</label>
                    </div>

                    <div class="col-sm-3">
                      <input type="text" name="departamento" id="departamento" class="form-control inputs" placeholder="departamento..">
                    </div>

                    <div class="col-sm-1">
                        <label for="direccion" class="col-form-label">Direccion:</label>
                    </div>

                    <div class="col-sm-3">
                      <input type="text" name="direccion" id="direccion" class="form-control inputs" placeholder="direccion..">
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-1">
                        <label for="sexo" class="col-form-label">Sexo:</label>
                    </div>

                    <div class="col-sm-3">
                        <?php  
                          include("../models/sexo.php");
                        ?>
                    </div>

                    <div class="col-sm-1">
                        <label for="ocupacion" class="col-form-label" style="">Ocupacion:</label>
                    </div>

                    <div class="col-sm-3">
                      <input type="text" name="ocupacion" id="ocupacion" class="form-control inputs" placeholder="ocupacion..">
                    </div>

                    <div class="col-sm-1">
                        <label for="ecivil" class="col-form-label" style="margin-top: -10px">Estado civil:</label>
                    </div>

                    <div class="col-sm-3">
                        <?php  
                          include("../models/estado_civil.php");
                        ?>
                    </div>
                  </div>
            
            <div class="row">
                    <div class="col-sm-1">
                        <label for="entidad" class="col-form-label">Entidad:</label>
                    </div>

                    <div class="col-sm-5">
                      <input type="text" name="entidad" id="entidad" class="form-control inputs" placeholder="entidad..">
                    </div>

                    <div class="col-sm-1">
                        <label for="regimen" class="col-form-label">Regimen:</label>
                    </div>

                    <div class="col-sm-5">
                        <?php  
                          include("../models/regimen.php");
                        ?>
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-1">
                        <label for="region" class="col-form-label">Region:</label>
                    </div>
                    <div class="col-sm-3">
                        <?php  
                          include("../models/region.php");
                        ?>
                    </div>
                    <div class="col-sm-1">
                        <label for="escolaridad" class="col-form-label">Escolaridad:</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="escolaridad" id="escolaridad" class="form-control inputs" placeholder="escolaridad..">
                    </div>
                    <div class="col-sm-1">
                        <label for="triage" class="col-form-label">Alerta:</label>
                    </div>
                    <div class="col-sm-3">
                        <?php  
                          include("../models/triage.php");
                        ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12" style="text-align: center; margin-top: 1%">
                        <h5>Anamnesis</h5>
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-3">
                        <label for="sintomas" class="col-form-label" style="margin-left: 10%;">
                          Motivo de consulta (sintomas):
                        </label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="sintomas" id="sintomas" class="inputs" style="width: 100%;"></textarea>
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-3">
                        <label for="enfermedades" class="col-form-label" style="margin-left: 15%">
                          Enfermedad(es) actual(es):
                        </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="enfermedades" id="enfermedades" class="form-control inputs" placeholder="Si no tiene rellene el campo con la palabra Ninguna">
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-12" style="text-align: center;">
                        <h5>Antecedentes heredofamiliares</h5>
                    </div>
                </div>

                <div class="row espacio2">
                    <div class="col-sm-3">
                        <label for="antecedentes" class="col-form-label" style="margin-left: 16%">
                          Enfermedades heredadas:
                        </label>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="antecedentes" id="antecedentes" class="form-control inputs" placeholder="Si no tiene rellene el campo con la palabra Ninguna">
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-4 espacio2">
                        <label for="" class="col-form-label" style="margin-left: 40px; font-weight: bold;">
                          Antecedentes personales
                        </label>
                    </div>
                    <div class="col-sm-3 espacio2">
                        <label for="" class="col-form-label">Habitos toxicos</label><br>
                    </div>
                    <div class="col-sm-5 espacio2">
                      <input type="checkbox" name="toxico" value="Alcohol" id="toxico">
                      <label for="Alcohol">Alcohol</label>

                      <input type="checkbox" name="toxico" value="Tabaco" id="toxico">
                      <label for="Tabaco">Tabaco</label>

                      <input type="checkbox" name="toxico" value="Drogas" id="toxico">
                      <label for="Drogas">Drogas</label>

                      <input type="checkbox" name="toxico" value="Infusiones" id="toxico">
                      <label for="Infusiones">Infusiones</label>

                      <input type="checkbox" name="toxico" value="Ninguno" id="toxico">
                      <label for="Ninguno">Ninguno</label>
                    </div>
                  </div>

                  <div class="row espacio2">
                    <div class="col-sm-1">
                      <label for="fisiologicos" class="col-form-label">Fisiologicos:</label>
                    </div>
                    <div class="col-sm-5">
                      <input type="text" name="fisiologicos" id="fisiologicos" class="form-control inputs">
                    </div>
                    <div class="col-sm-1">
                      <label for="examenes" class="col-form-label">Examenes:</label>
                    </div>
                    <div class="col-sm-5">
                      <input type="text" name="examenes" id="examenes" class="form-control inputs" placeholder="Si no tiene rellene el campo con la palabra Ninguno">
                    </div>
                  </div>

                  <div class="row espacio centro">
                    <input type="submit" class="btn btn-sm btn-outline-dark" value="Enviar"></input>
                  </div>
                  <div class="row espacio centro">
                    <a href="../views/home.php" class="btn btn-sm btn-outline-danger">Volver</a>
                  </div>
              </form>
        </div>
        <br>
        <br>

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