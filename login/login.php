<?php
ob_start();
session_start();
if(isset($_SESSION['usuario'])){
  header("Location: ../blog/nuevo-articulo.php");
}
?>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="aomine">
  <meta name="description" content="cevicheria el peñon">
  <meta name="keywords" content="cevicheria, cevicheria el peñon, el peñon, peñon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
  <!-- Mis estilos CSS -->
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/responsive-media.css">
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  <!--icono-->
  <link rel="shortcut icon" href="../img/ico/penion-0.ico">

  <title>El Peñon</title>
</head>
<body>
  <!--inicio de login-->
  <div class="container login d-flex justify-content-center align-items-center">
    <form action="validar.php" method="POST" class="form-login text-white p-3 rounded">
      <div class="text-center">
        <img src="../img/login.png" alt="" class="img-login">
      </div>
      <div class="form-group">
        <label for="usuario"><i class="fas fa-user"></i> Usuario</label>
        <input type="text" id="usuario" name="usuario" placeholder="usuario" class="form-control input-login text-white" required autofocus>
      </div>
      <div class="form-group">
        <label for="password"><i class="fas fa-lock"></i> Password</label>
        <input type="password" id="password" name="password" placeholder="password"class="form-control input-login text-white" required>
      </div>
      <div class="form-group d-flex justify-content-around">
        <input type="Submit" class="btn btn-danger" value="Ingresar">
        <a href="../blog.php" class="btn btn-primary">Volver</a>
      </div>
    </form>
  </div>
  <!--fin de login-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <!--cambio de color de navbar-->
  <script src="js/script.js"></script>
</body>
</html>