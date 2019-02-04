<?php
try {
	$conex = new PDO('mysql:host=nibbleteach87363.ipagemysql.com;dbname=bdblog','aomine','darkhollow07');
} catch (PDOException $e) {
	echo "Error: ".$e->getMessage();
}
?>