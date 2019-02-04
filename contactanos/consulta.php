<?php
ob_start();
include "../blog/conexion.php";
$conexion -> set_charset("utf8");
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$insertar="INSERT INTO consultas(nombre, correo, telefono, mensaje) VALUES('$nombre', '$correo', '$telefono', '$mensaje')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo "Error al conectar con la Base de Datos";
}else{
	echo "<script> alert('Consulta enviada exitosamente'); </script>";
	echo "<script>location.href='../contactanos.html';</script>";
	
}
mysqli_close($conexion);
/* 
header("location: ../contactanos.html");
 */
ob_end_flush();
?>