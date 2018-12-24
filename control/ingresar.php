<?php
	session_start();
	$CadJson ="";
	include_once('../modelo/Usuario.php');
	if(isset($_POST['txtClave']) && isset($_POST['txtUser'])){
		$Usu = $_POST['txtUser'];
		$Clave = $_POST['txtClave'];
		$sUser = new Usuario();
		$sUser->setEmail($Usu);
		$sUser->setPassword($Clave);
		if($sUser->buscarUser()){
			$CadJson = '{"sucessfull":true,"datos":"'.$sUser->getTipo().'"}';
			$_SESSION['user'] =serialize($sUser);
		}else{
			$CadJson = '{"sucessfull":false,"datos":"Usuario Invalido"}';
		}
	}
	header('Content-type: application/json');
	echo $CadJson;
?>