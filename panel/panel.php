<?php
	session_start();
	include('../modelo/Usuario.php');
	$user = unserialize($_SESSION['user']);
	//print_r($user);
	echo "Tipo de user: ".$user->getTipo();
?>