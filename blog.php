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
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<!-- Mis estilos CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/blog.css">
	<link rel="stylesheet" href="css/responsive-media.css">
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	<!--icono-->
	<link rel="shortcut icon" href="img/ico/penion-0.ico">
	<!--JQuery-->
	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<title>El Peñon</title>
</head>
<body>
	<!--inicio de navbar-->
	<header role="banner">
		<nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-transparent-responsive-responsive fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html"><img src="img/logo-3.png" class=" logo-navbar" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center">
						<li class="nav-item">
							<a class="nav-link font-weight-bold item-conf mx-2 lade" href="index.html">INICIO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link font-weight-bold item-conf mx-2 lade" href="nosotros.html">NOSOTROS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link font-weight-bold item-conf mx-2 lade" href="menu.html">MENU</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link font-weight-bold item-conf mx-2 lade" href="blog.php">BLOG<hr class="hr-item d-none d-md-block"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link font-weight-bold item-conf mx-2 lade" href="http://miscomprobantes.restodata.net" target="_blank">COMPROBANTE ELECTRONICO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link font-weight-bold item-conf mx-2 lade" href="contactanos.html">CONTACTANOS</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--fin de navbar-->

	<!--inicio de BEP-->
	<div class="bep d-flex align-items-center justify-content-center">
		<div class="text-center">
			<div class="animacion-1">
				<ul class="animacion-ul-1">
					<li class="bep-li my-3">Restaurant</li>
					<li class="bep-li my-3">Cevicheria</li>
					<li class="bep-li">Picanteria</li>
				</ul>
			</div>
			<h2 class="bep-h2">El PEÑON</h2>
		</div>
	</div>
	<!--fin de BEP-->

	<!--inicio de fondo para celular-->
	<div class="fondo-celular d-block d-md-none sbe"></div>
	<!--fin de fondo para celular-->

	<!--inicio de slider-->
	<div id="carouselExampleIndicators" class="carousel slide sbe" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active d-none d-md-block"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" class="d-none d-md-block"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2" class="d-none d-md-block"></li>
		</ol>
		<div class="carousel-inner d-none d-md-block">
			<div class="carousel-item active">
				<div class="d-block w-100 slider-b-1"></div>
			</div>
			<div class="carousel-item">
				<div class="d-block w-100 slider-b-2"></div>
			</div>
			<div class="carousel-item">
				<div class="d-block w-100 slider-b-3"></div>
			</div>
		</div>
		<div class="d-none d-md-block">
			<a class="carousel-control-prev previus-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true" class=""></span>
				<span class="sr-only">Previous</span>
			</a>
		</div>
		<div class="d-none d-md-block">
			<a class="carousel-control-next previus-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true" class=""></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--find de slider-->

	<!--inicio de blog-->
	<div class="container mt-4 pt-5 mt-md-2 ">
		<h3 class="text-naranja lade-t">Blog<a href="login/login.php" class="ml-2"><img src="img/nuevo.svg" class="nuevo" alt="nuevo articulo"></a></h3>
		<p class="lead text-light lade">Recetas, articulos y más.</p>
		<?php
		include "blog/conexion.php";
		$conexion -> set_charset("utf8");
		$consulta = "SELECT * FROM articulo ORDER BY fecha DESC";
		$resultado=mysqli_query($conexion,$consulta);
		while($fila=mysqli_fetch_row($resultado)){
			echo "<hr class='mb-4'>";
			echo "<div class='row my-3 justify-content-center align-items-center'>";
			echo "<div class='col-12 col-md-9 col-xl-5'>";
			echo "<img src='img/" . $fila[4] . "' class='img-fluid' alt='imagenes del blog'>";
			echo "<p class='lead text-center text-light lade'>" . $fila[2] . "</p>";
			echo "</div>";
			echo "<div class='col-12 col-xl-7'>";
			echo "<h3 class='text-naranja lade-t'>" . $fila[1] . "</h3>";
			echo "<pre class='ff mt-3 text-light lade'>" . $fila[3] . "</pre>";
			echo "</div>";
			echo "</div>";
		}
		mysqli_close($conexion);
		?>
	</div>
	<!--fin de blog-->

	<!--inicio de footer-->
	<footer class="bg-azul text-light" role="contentinfo">
		<div class="container">
			<div class="row py-4">
				<div class="col-sm-6 col-md-3 mb-2">
					<a class="navbar-brand" href="#"><img src="img/logo-3.png" class=" logo-footer" alt="logo"></a>
					<br>
					<small class="f-size text-light lad">Copyright &copy 2018 All Rights Reserved</small>
					<a class="lead f-size nf lad-t" href="http://nibbleframe.com/" target="_blank">Powered by Nibble Frame</a>
				</div>
				<div class="col-sm-6 col-md-3">
					<p class="lead lad-t">Reservas</p>
					<p class="lead f-size color-f lad"> <i class="fas fa-phone text-light"></i> 061-570008</p>
					<p class="lead f-size  color-f lad"><i class="fas fa-map-marker-alt text-light"></i> Av. Túpac Amaru # 128; distrito de calleria; Pucallpa-Perú</p>
				</div>
				<div class="col-sm-6 col-md-3">
					<p class="lead lad-t">Horarios de atención</p>
					<p class="lead f-size color-f lad"><i class="far fa-clock text-light"></i> Lunes de 10:00am a 4:30pm</p>
					<p class="lead f-size color-f lad"><i class="far fa-clock text-light"></i> Martes a Domingo de 10:00am a 11:00pm</p>					
				</div>
				<div class="col-sm-6 col-md-3">
					<p class="lead lad-t">Síguenos</p>
					<a href="https://www.facebook.com/Restaurant-Cevicheria-y-Picanteria-El-Pe%C3%B1on-309821075795716/" target="_blank"><img src="img/face.svg" class="size-sociales-f opacity-sociales-f" alt="Facebook"></a>
					<a href="https://twitter.com" target="_blank"><img src="img/gorjeo.svg" class="size-sociales-f opacity-sociales-f" alt="Twitter"></a>
					<a href="https://www.youtube.com/channel/UC5qXHdQpSeEUjcm5GguazFQ" target="_blank"><img src="img/yt.svg" class="size-sociales-f opacity-sociales-f" alt="Youtube"></a>
				</div>
			</div>
		</div>
	</footer>
	<!--fin de footer-->

	<!--inicio de sociales-->
	<div class="sociales">
		<a href="https://www.facebook.com/Restaurant-Cevicheria-y-Picanteria-El-Pe%C3%B1on-309821075795716/" target="_blank"><img src="img/facebook.png" class="size-sociales opacity-sociales sociales-borde" alt="Facebook"></a>
		<a href="https://twitter.com" target="_blank"><img src="img/twitter.svg" class="size-sociales opacity-sociales sociales-borde" alt="Twitter"></a>
		<a href="https://www.youtube.com/channel/UC5qXHdQpSeEUjcm5GguazFQ" target="_blank"><img src="img/youtube.svg" class="size-sociales opacity-sociales sociales-borde" alt="Youtube"></a>
		<a href="http://miscomprobantes.restodata.net" target="_blank"><img src="img/recepcion.svg" class="size-sociales opacity-sociales sociales-borde" alt="Factura"></a>
		<!--<a href="#"><img src="img/usuario.png" class="size-sociales opacity-sociales sociales-borde" alt="log"></a>-->
	</div>
	<!--fin de sociales-->

	<!--inicio de flecha-->
	<div class="flecha">
		<i class="fas fa-angle-up"></i>
	</div>
	<!--fin de flecha-->

	<!-- Optional JavaScript -->
	<!-- jQuery, then Popper.js, then Bootstrap JS -->
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="js/bootstrap/bootstrap.js"></script>
	<!--cambio de color de navbar-->
	<script src="js/script.js"></script>
</body>
</html>