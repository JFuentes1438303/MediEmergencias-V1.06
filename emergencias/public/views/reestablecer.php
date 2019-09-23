<!DOCTYPE html>
<html lang="es">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login MediEmergencias</title>
      <!-- Bootstrap core CSS -->
      <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="../../css/estilos.css">
      <link rel="shortcut icon" href="">
      <script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
      <script src="../../vendor/js/validar_pass.js"></script>
    </head>

  <body>

    <div class="container div color2">

      <div class="row color3" style="border-bottom: 1px solid #000;">
        <div class="col-sm-3">
          <a href="../../index.php">
            <img src="../../files/img/logoem3.png" class="logo">
          </a>
        </div>
        <div class="col-sm-9 titulos">
          Reestablecer contraseña
        </div>  
      </div>

      <form action="../models/reestablecer.php" method="POST" onsubmit="return validar();">

        <div class="row espacio">
          <div class="col-sm-3">
            <label for="doc" class="col-sm-2 col-form-label labels">Documento</label>            
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control inputs" id="doc" placeholder="Ingrese documento" name="documento" autocomplete="off"> 
          </div>
        </div>

        <div class="row espacio">
          <div class="col-sm-3">
            <label for="pnombre" class="col-form-label labels">Primer nombre</label>
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control inputs" id="pnombre" placeholder="Ingrese primer nombre" name="primer_nombre" autocomplete="off">
          </div>
        </div>

        <div class="row espacio">
          <div class="col-sm-3">
            <label for="papellido" class="col-form-label labels">Primer apellido</label>
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control inputs" id="papellido" placeholder="Ingrese primer apellido" name="primer_apellido" autocomplete="off">
          </div>
        </div>

        <div class="row espacio">
          <div class="col-sm-3">
            <label for="pass" class="col-form-label" style="margin-left: 15%">Nueva contraseña</label>
          </div>
          <div class="col-sm-8">
            <input type="password" class="form-control inputs" id="npass" placeholder="Ingrese nueva contraseña" name="nueva_password" autocomplete="off">
          </div>
        </div>

        <div class="row espacio">
          <div class="col-sm-3">
            <label for="pass" class="col-form-label" style="margin-left: 10%">Confirmar contraseña</label>
          </div>
          <div class="col-sm-8">
            <input type="password" class="form-control inputs" id="cpass" placeholder="Ingrese nueva contraseña" name="conf_password" autocomplete="off">
          </div>
        </div>

        <div class="row espacio centro">
          <button type="submit" class="btn btn-sm btn-outline-dark" name="submit">Reestablecer</button>
        </div>

        <div class="row espacio centro">
          <a href="../../index.php" class="btn btn-sm btn-outline-danger">Volver</a>
        </div>

      </form>
    </div>

    <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>