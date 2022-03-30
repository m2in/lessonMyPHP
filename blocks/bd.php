<?php 
	$user = 'root';
	$password = '';
	$bd = 'miphpsite';
	$host = 'localhost';

	$dsn = 'mysql:host='.$host.';bdname='.$bd;
	$pdo = new PDO($dsn, $user, $password);
?>