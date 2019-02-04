<?php
ob_start();
session_start();
if(isset($_SESSION['usuario'])){
	header('Location: ../login/login.php');
}
?>
<!Doctype html>
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
	<link rel="stylesheet" href="../css/nuevo-articulo.css">
	<link rel="stylesheet" href="../css/responsive-media.css">
	<!--icono-->
	<link rel="shortcut icon" href="../img/ico/penion-0.ico">

	<title>El Peñon</title>
</head>
<body>
	<!--inicio de titulo-->
	<h2 class="display-4 my-3 text-center text-nuevo">NUEVO ARTICULO</h2>
	<!--fin de titulo-->

	<!--inicio de formulario-->
	<form action="insertar.php" method="POST" enctype="multipart/form-data" name="form1" class="container w-75 form-nuevo text-white rounded p-3 my-5">
		<div class="form-group">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" id="titulo" placeholder="Ingrese el titulo de su articulo..." class="form-control input-nuevo" required autofocus>
		</div>
		<div class="form-group">
			<label for="articulo">Articulo:</label>
			<textarea name="articulo" id="articulo" cols="50" rows="10" placeholder="Ingrese el contenido de su articulo..." class="form-control input-nuevo" required></textarea>
		</div>
		<div class="form-group">
			<label for="imagen">Imagen:<small> (max 2mb)</small></label>
			<input type="file" name="imagen" id="imagen" class="form-control-file input-nuevo" required>
		</div>
		<div class="form-group d-sm-flex justify-content-sm-around text-center">
			<input type="submit" class="btn btn-danger" value="Enviar">
			<a href="../blog.php"class="btn btn-info m-v">Volver</a>
			<a href="cerrar.php" class="btn btn-success m-cs">Cerrar Sesión</a>
		</div>
	</form>
	<!--fin de formulario-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap/bootstrap.js"></script>
</body>
</html>