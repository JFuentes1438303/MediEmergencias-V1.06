<!DOCTYPE html>
<html lang="es">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login MediEmergencias</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="css/estilos.css">
      <link rel="shortcut icon" href="">
      <script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
      <script src="vendor/js/validar_login.js"></script>

    </head>

  <body>

    <div class="container div color2">

      <div class="row color3" style="border-bottom: 1px solid #000;">
        <div class="col-sm-3">
          <a href="index.php">
            <img src="files/img/logoem3.png" class="logo">
          </a>
        </div>
        <div class="col-sm-9 titulos">
          Inicio de sesion
        </div>  
      </div>

      <form action="public/models/login.php" method="POST" onsubmit="return validar();">

        <div class="row espacio">
          <div class="col-sm-3 espacio">
            <label for="doc" class="col-sm-2 col-form-label labels">Documento</label>            
          </div>
          <div class="col-sm-8 espacio">
            <input type="text" class="form-control inputs" id="doc" placeholder="Ingrese documento" name="documento"  autocomplete="off"> 
          </div>
        </div>

        <div class="row espacio">
          <div class="col-sm-3 espacio">
            <label for="pass" class="col-sm-2 col-form-label labels">Contraseña</label>
          </div>
          <div class="col-sm-8 espacio">
            <input type="password" class="form-control inputs" id="pass" placeholder="Ingrese contraseña" name="password"autocomplete="off">
          </div>
        </div>

        <div class="row espacio" style="justify-content: center">
          <button type="submit" class="btn btn-sm btn-outline-dark" name="submit">Iniciar Sesión</button>
        </div>

        <div class="row espacio" style="justify-content: center;">
          <a href="public/views/registro.php" class="links">Registrarse</a>
        </div>

        <div class="row espacio" style="justify-content: center">
          <a href="public/views/reestablecer.php" class="links">¿Olvido la contraseña?</a>
        </div>

      </form>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>