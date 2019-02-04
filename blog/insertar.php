<!--inicio de conexion-->
<?php
ob_start();
include "conexion.php";
$conexion -> set_charset("utf8");
if ($_FILES['imagen']['error']) {
	switch ($_FILES['imagen']['error']) {
		case 1:
		echo "El tamaño del archivo supera el permitido";
		break;

		case 2:
		echo "El tamaño del archivo supera el permitido";
		break;

		case 3:
		echo "Envio de archivo interrumpido";
		break;

		case 4:
		echo "no se ha enviado ningun archivo";
		break;
	}
}else{
	$destino="../img/";
	move_uploaded_file($_FILES['imagen'] ['tmp_name'], $destino . $_FILES['imagen'] ['name']);
}
$titulo = $_POST['titulo'];
$fecha = date("Y-m-d H:i:s");
$articulo = $_POST['articulo'];
$imagen = $_FILES['imagen'] ['name'];
$insertar="INSERT INTO articulo(titulo, fecha, articulo, imagen) VALUES('$titulo', '$fecha', '$articulo', '$imagen')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo "Error al conectar con la Base de Datos";
} else {
	echo "<script> alert('Articulo enviada exitosamente'); </script>";
	echo "<script>location.href='../blog.php';</script>";
}
mysqli_close($conexion);
/* 
header("location: ../blog.php");
 */
ob_end_flush();
?>
<!--fin de conexion-->
