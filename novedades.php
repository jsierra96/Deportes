<?php
include_once('modelo/producto.php');
 $Conecta = new conexion();
 if($Conecta->conecta()){
 	$comando = "select * from Productos";
 	$Obtenido = $Conecta->ejecutaConsulta($comando);
 	$producto = array();
 	for ($i=0; $i < count($Obtenido);$i++){
 		$datos = new producto();
 		$datos->setNombre($Obtenido[$i][1]);
 		$datos->setPrecio($Obtenido[$i][2]);
 		$datos->setTalla($Obtenido[$i][3]);
 		$datos->setSize($Obtenido[$i][4]);
 		$datos->setColor($Obtenido[$i][5]);
 		$datos->setTipo($Obtenido[$i][6]);
 		$datos->setEquipo($Obtenido[$i][7]);
 		$datos->setDisiplina($Obtenido[$i][8]);
 		$datos->setCantidad($Obtenido[$i][9]);
 		$datos->setGenero($Obtenido[$i][10]);
 		$datos->setImagen($Obtenido[$i][11]);
 		$producto[$i] = $datos;
 	}
 	#print_r($producto);
 }else{
 	echo "Conexion fallida";
 }
?>