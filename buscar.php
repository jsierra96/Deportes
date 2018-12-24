<?php
	include_once('modelo/producto.php');
	$producto = new producto();
	$error=false;
	if(isset($_GET['cat']) && !empty($_GET['cat'])){
		$tipo=$_GET['cat'];
		$sQuery= "";
		if($tipo == "tenis"){
			$sQuery = 'select * from Productos where sTipo="'.$tipo.'"';
		}else{
			$sQuery = 'select * from Productos where sGenero="'.$tipo.'"';
		}
		$sProduc = $producto->buscar($sQuery);
		if($sProduc){
			$error=false;
		}else{
			$error=true;
		}
		include 'productos.php';
	}else{
		echo "Variable indefinida";
	}
?>