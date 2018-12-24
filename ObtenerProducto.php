<?php
 include_once('modelo/producto.php');
 session_start();
 $sCadJson = "";
$sQuery="";
	if(isset($_GET['cat']) && !empty($_GET['cat'])){
		if(isset($_GET['opcion']) && !empty($_GET['opcion'])){
			$opcion=$_GET['opcion'];
			if($_GET['cat']=='Masculino'){
				if($_GET['opcion']=='Futbol'){
					$sQuery = "select * from Productos where sGenero='Masculino' and sDisciplina='Futbol'";
				}else if($_GET['opcion']=='Beisbol'){
					$sQuery = "select * from Productos where sGenero='Masculino' and sDisciplina='Beisbol'";
				}else if($_GET['opcion']=='Baloncesto'){
					$sQuery = "select * from Productos where sGenero='Masculino' and sDisciplina='Baloncesto'";
				}else{
					$sQuery = "select * from Productos where sGenero='Masculino' and sEquipo='".$opcion."'";
				}
			}else if($_GET['cat']=='Femenino'){
				if($_GET['opcion']=='Futbol'){
					$sQuery = "select * from Productos where sGenero='Femenino' and sDisciplina='Futbol'";
				}else if($_GET['opcion']=='Beisbol'){
					$sQuery = "select * from Productos where sGenero='Femenino' and sDisciplina='Beisbol'";
				}else if($_GET['opcion']=='Baloncesto'){
					$sQuery = "select * from Productos where sGenero='Femenino' and sDisciplina='Baloncesto'";
				}else{
					$sQuery = "select * from Productos where sGenero='Femenino' and sEquipo='".$opcion."'";
				}
			}else if($_GET['cat']=='boy'){
				if($_GET['opcion']=='Futbol'){
					$sQuery = "select * from Productos where sGenero='boy' and sDisciplina='Futbol'";
				}else if($_GET['opcion']=='Beisbol'){
					$sQuery = "select * from Productos where sGenero='boy' and sDisciplina='Beisbol'";
				}else if($_GET['opcion']=='Baloncesto'){
					$sQuery = "select * from Productos where sGenero='boy' and sDisciplina='Baloncesto'";
				}else{
					$sQuery = "select * from Productos where sGenero='boy' and sEquipo='".$opcion."'";
				}
			}else if($_GET['cat']=='girl'){
				if($_GET['opcion']=='Futbol'){
					$sQuery = "select * from Productos where sGenero='girl' and sDisciplina='Futbol'";
				}else if($_GET['opcion']=='Beisbol'){
					$sQuery = "select * from Productos where sGenero='girl' and sDisciplina='Beisbol'";
				}else if($_GET['opcion']=='Baloncesto'){
					$sQuery = "select * from Productos where sGenero='girl' and sDisciplina='Baloncesto'";
				}else{
					$sQuery = "select * from Productos where sGenero='girl' and sEquipo='".$opcion."'";
				}
			}
		}
		
		
			
		$Producto = new producto();
		$Obtenido = $Producto->buscar($sQuery);
		if($Obtenido){
			 $sCadJson =
 	   '{
			"successful":true,
			"sSit": "ok",
			"arraProdu":[';
		
		//"clave":'.$Obtenido[1]->getClave().'}]}'
		//Recorrer arreglo para llenar objetos
			for($i=0; $i < count($Obtenido) ;$i++){
				$sCadJson= $sCadJson.'{
					"clave":'.$Obtenido[$i]->getClave().',
					"nombre":"'.$Obtenido[$i]->getNombre().'",
					"precio": '.$Obtenido[$i]->getPrecio().', 
					"talla":"'.$Obtenido[$i]->getTalla().'",
					"size":"'.$Obtenido[$i]->getSize().'", 
					"color":"'.$Obtenido[$i]->getColor().'", 
					"tipo":"'.$Obtenido[$i]->getTipo().'", 
					"equipo":"'.$Obtenido[$i]->getEquipo().'",
					"disiplina":"'.$Obtenido[$i]->getDisiplina().'", 
					"cantidad": '.$Obtenido[$i]->getCantidad().', 
					"genero":"'.$Obtenido[$i]->getGenero().'",  
					"imagen":"'.$Obtenido[$i]->getImagen().'"
				},';
			}
		$sCadJson = substr($sCadJson,0, strlen($sCadJson)-1);
		$sCadJson = $sCadJson.']}';
		}else{
		 $sCadJson = '{
		 	"successful":false,
		 	"sSit": "ok"}';
	    }
	}
	header('Content-type: application/json');
    echo $sCadJson;
?>