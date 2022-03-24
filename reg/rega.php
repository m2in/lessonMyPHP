<?php
	$userName = trim(filter_var($_POST['userName'], FILTER_SANITIZE_STRING));
	$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
	$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
	$pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

	if(strlen($userName) <= 3)
		exit();
	else if(strlen($email) <= 3)
		exit();
	else if(strlen($login) <= 3)
		exit();
	else if(strlen($pass) <= 3)
		exit();

	$hash = "6809A2QfP3Bk";
	$pass = md5($pass . $hash);
?>