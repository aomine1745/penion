<?php
if (!is_writable(session_save_path())) {
	echo 'La ruta "'.session_save_path().'" no tiene permisos de escritura en PHP!';
}else{
	echo 'La ruta "'.session_save_path().'" si vale prro :v';
}
?>
<?php phpinfo();?>