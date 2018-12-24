<?php
   /**
    * Author: Sierra Sánchez Joanan
    */
   include 'conexion.php';
   class producto{
     
   	private $nCveProd;
   	private $sNomProducto;
   	private $nPrecio;
   	private $sTallas;
   	private $sTamanos;
   	private $sColores;
   	private $sTipo;
   	private $sEquipo;
   	private $sDisiplina;
   	private $nCantidad;
   	private $sGenero;
   	private $sImg;

   	function setClave($valor){
   		$this->nCveProd = $valor;
   	}
   	function setNombre($valor){
   		$this->sNomProducto = $valor;
   	}
   	function setPrecio($valor){
   		$this->nPrecio = $valor;
   	}
   	function setTalla($valor){
   		$this->sTallas = $valor;
   	}
   	function setSize($valor){
   		$this->sTamanos = $valor;
   	}
   	function setColor($valor){
   		$this->sColores = $valor;
   	}
   	function setTipo($valor){
   		$this->sTipo = $valor;
   	}
   	function setEquipo($valor){
   		$this->sEquipo = $valor;
   	}
   	function setDisiplina($valor){
   		$this->sDisiplina = $valor;
   	}
   	function setCantidad($valor){
   		$this->nCantidad = $valor;
   	}
   	function setGenero($valor){
   		$this->sGenero = $valor;
   	}
   	function setImagen($valor){
   		$this->sImg = $valor;
   	}
//********************************* Gets **************************************//
   	function getClave(){
   		return $this->nCveProd;
   	}
   	function getNombre(){
   		return $this->sNomProducto;
   	}
   	function getPrecio(){
   		return $this->nPrecio;
   	}
   	function getTalla(){
   		return $this->sTallas;
   	}
   	function getSize(){
   		return $this->sTamanos;
   	}
   	function getColor(){
   		return $this->sColores;
   	}
   	function getTipo(){
   		return $this->sTipo;
   	}
   	function getEquipo(){
   		return $this->sEquipo;
   	}
   	function getDisiplina(){
   		return $this->sDisiplina;
   	}
   	function getCantidad(){
   		return $this->nCantidad;
   	}
   	function getGenero(){
   		return $this->sGenero;
   	}
   	function getImagen(){
   		return $this->sImg;
   	}
   	
#************************************* metodos para buscar *************************************

      function buscarGenero($genero){
         $oConexion = new conexion();
         $arrayPro = null;
         $sQuery= "select * from Productos where sGenero='".$genero."'";
         $oConexion->conecta();
         $Obtenido = $oConexion->ejecutaConsulta($sQuery);
         for($i = 0; $i <count($Obtenido); $i++){
            $datos = new producto();
            $datos->setClave($Obtenido[$i][0]);
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
            $arrayPro[$i] = $datos;
         }
         //print_r($Obtenido);
         return $arrayPro;
      }

      function buscar($consulta){
         $oConexion = new conexion();
         $arrayPro = null;
         $oConexion->conecta();
         $Obtenido = $oConexion->ejecutaConsulta($consulta);
         for($i = 0; $i <count($Obtenido); $i++){
            $datos = new producto();
            $datos->setClave($Obtenido[$i][0]);
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
            $arrayPro[$i] = $datos;
         }
         return $arrayPro;
      }

      function buscarClave($clave){
         $oConexion = new conexion();
         $Producto = null;
         $oConexion->conecta();
         $sQuery = 'select * from Productos where nCveProd='.$clave;
         $Obtenido = $oConexion->ejecutaConsulta($sQuery);
         if($Obtenido){
            $datos = new producto();
            $datos->setClave($Obtenido[0][0]);
            $datos->setNombre($Obtenido[0][1]);
            $datos->setPrecio($Obtenido[0][2]);
            $datos->setTalla($Obtenido[0][3]);
            $datos->setSize($Obtenido[0][4]);
            $datos->setColor($Obtenido[0][5]);
            $datos->setTipo($Obtenido[0][6]);
            $datos->setEquipo($Obtenido[0][7]);
            $datos->setDisiplina($Obtenido[0][8]);
            $datos->setCantidad($Obtenido[0][9]);
            $datos->setGenero($Obtenido[0][10]);
            $datos->setImagen($Obtenido[0][11]);
            $Producto = $datos;
         }
         return $Producto;
      }

   }
?>