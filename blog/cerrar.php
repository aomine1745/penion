<?php
ob_start();
session_start();
session_destroy();
$_SESSION = array();
header('location: ../login/login.php');
ob_end_flush();
?>