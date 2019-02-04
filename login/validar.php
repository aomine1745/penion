<?php 
ob_start();
session_start();
if(isset($_SESSION['usuario'])){
	header('Location: ../blog/nuevo-articulo.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	require('conex.php');
	$consulta = $conex -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'); 
	$consulta ->execute(array(':usuario'=> $usuario,':password'=> $password));
	$resultado = $consulta->fetch();
	if ($resultado !==false){
		$_SESSION['usuario'] = $usuario;
		header('Location: ../blog/nuevo-articulo.php');
	}else{
		header('location: login.php');
	}
}
ob_end_flush();
?>