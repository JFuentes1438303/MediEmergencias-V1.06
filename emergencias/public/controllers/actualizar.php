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

          class Actualizacion{
            public function actualizar($tipo_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $sexo, $fecha_nacimiento, $direccion, $telefono){

              include("../models/conexion.php");

              $doc_perfil = $_SESSION["documento"];

              $sql = "UPDATE usuario_paciente SET tipo_documento = '$tipo_documento', primer_nombre = '$primer_nombre', segundo_nombre = '$segundo_nombre', primer_apellido = '$primer_apellido', segundo_apellido = '$segundo_apellido', sexo = '$sexo', fecha_nacimiento = '$fecha_nacimiento', direccion = '$direccion', telefono = '$telefono' WHERE documento = '$doc_perfil'";

              if(!$result = $db ->query($sql)){
                die ('Hay un error en la consulta [' .$db->error .']');
              }

              $sql2 ="SELECT * FROM usuario_paciente WHERE documento = '$doc_perfil'";

              if(!$result2 = $db ->query($sql2)){
                die ('Hay un error en la consulta [' .$db->error .']');
              }

              while($row2 = $result2->fetch_assoc()){
                $ttipo_documento = stripcslashes($row2["tipo_documento"]);
                $ddocumento = stripcslashes($row2["documento"]);
                $pprimer_nombre = stripcslashes($row2["primer_nombre"]);
                $ssegundo_nombre = stripcslashes($row2["segundo_nombre"]);
                $pprimer_apellido = stripcslashes($row2["primer_apellido"]);
                $ssegundo_apellido = stripcslashes($row2["segundo_apellido"]);
                $ssexo = stripcslashes($row2["sexo"]);
                $ffecha_nacimiento = stripcslashes($row2["fecha_nacimiento"]);
                $ddireccion = stripcslashes($row2["direccion"]);
                $ttelefono = stripcslashes($row2["telefono"]);

?>

          <div class="container div2 color2">
            <form action='../controllers/actualizar.php' method='POST'>
              <div class="row color3">
                <div class="col-sm-2">
                  <a href="../views/home.php">
                    <img src="../../files/img/logoem3.png" class="logo">
                  </a>
                </div>
                <div class="col-sm-9 titulos">
                   INFORMACION ACTUALIZADA
                </div>  
              </div>

              <div class="row centro negrilla espacio b_bottom">
                <div class="col-sm-3 t_centro">Tipo de documento</div>
                <div class="col-sm-2 t_centro">Documento</div>
                <div class="col-sm-2 t_centro">Fecha de nacimiento</div>
                <div class="col-sm-2 t_centro">Telefono</div>
                <div class="col-sm-2 t_centro">Sexo</div>
              </div>

              <div class="row centro espacio b_bottom">
                <div class="col-sm-3 t_centro">
                  <select>
                  <?php
                     $sql3 = "SELECT * FROM tipo_documento";

                    if(!$result3 = $db ->query($sql3)){
                      die ('Hay un error en la consulta [' .$db->error .']');
                    }

                    while($row3 = $result3->fetch_assoc()){
                      $iid_tipo_documento = stripcslashes($row3["id_tipo_documento"]);
                      $tttipo_documento = stripcslashes($row3["tipo_documento"]);

                      if($iid_tipo_documento==$ttipo_documento){
                        echo"<option value=$iid_tipo_documento SELECTED>$tttipo_documento</option>";
                      } 
                    }
                  ?>
                  </select> 
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $ddocumento ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $ffecha_nacimiento ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $ttelefono ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <select>
                  <?php
                    $sql4 = "SELECT * FROM sexo";
                      if(!$result4 = $db ->query($sql4)){
                        die ('Hay un error en la consulta [' .$db->error .']');
                      }

                      while($row4 = $result4->fetch_assoc()){
                        $iid_sexo = stripcslashes($row4["id_sexo"]);
                        $sssexo = stripcslashes($row4["sexo"]);

                        if($iid_sexo==$ssexo){
                          echo"<option value=$iid_sexo SELECTED>$sssexo</option>";
                        } 
                      }
                  ?>
                  </select>
                </div>
              </div>

              <div class="row centro espacio b_bottom negrilla">
                <div class="col-sm-3 t_centro">Direccion</div>
                <div class="col-sm-2 t_centro">Primer nombre</div>
                <div class="col-sm-2 t_centro">Segundo nombre</div>
                <div class="col-sm-2 t_centro">Primer apellido</div>
                <div class="col-sm-2 t_centro">Segundo apellido</div>
              </div>

              <div class="row centro espacio b_bottom">
                <div class="col-sm-3 t_centro">
                  <?php echo $ddireccion ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $pprimer_nombre ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $ssegundo_nombre ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $pprimer_apellido ?>
                </div>
                <div class="col-sm-2 t_centro">
                  <?php echo $ssegundo_apellido ?>
                </div>
              </div> 
              <br>
              <div class="row centro espacio">
                <a href="../views/home.php" class="btn btn-sm btn-outline-dark">Volver</a>
              </div>
              <br>


            </form>
          </div>
            
<?php
          }
        }
      }
            $nuevo = new Actualizacion();
            $nuevo->actualizar($_POST['tipo_documento'], $_POST["primer_nombre"], $_POST["segundo_nombre"], $_POST["primer_apellido"], $_POST["segundo_apellido"], $_POST["sexo"], $_POST["fecha_nacimiento"], $_POST["direccion"], $_POST["telefono"]); 

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