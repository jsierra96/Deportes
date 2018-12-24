<?php
include_once('conexion.php');
class Usuario{
	private $nClave;
	private $sPassword;
	private $sNombre;
	private $sApaterno;
	private $sAmaterno;
	private $nTelefono;
	private $sDireccion;
	private $sEmail;
	private $sTipo;
	function setClave($dato){
		$this->nClave = $dato;
	}
	function getClave(){
		return $this->nClave;
	}
	function setPassword($dato){
		$this->sPassword = $dato;
	}
	function getPassword(){
		return $this->sPassword;
	}
	function setNombre($dato){
		$this->sNombre= $dato;
	}
	function getNombre(){
		return $this->sNombre;
	}
	function setApePaterno($dato){
		$this->sApaterno = $dato;
	}
	function getApePaterno(){
		return $this->sApaterno;
	}
	function setApeMaterno($dato){
		$this->sAmaterno = $dato;
	}
	function getApeMaterno(){
		return $this->sAmaterno;
	}
	function setTelefono($dato){
		$this->nTelefono = $dato;
	}
	function getTelefono(){
		return $this->nTelefono;
	}
	function setDireccion($dato){
		$this->sDireccion = $dato;
	}
	function getDireccion(){
		return $this->sDireccion;
	}
	function setEmail($dato){
		$this->sEmail = $dato;
	}
	function getEmail(){
		return $this->sEmail;
	}
	function setTipo($dato){
		$this->sTipo = $dato;
	}
	function getTipo(){
		return $this->sTipo;
	}

	function buscarUser(){
		$oConexion = new conexion();
		$oSearch = true;
		if($oConexion->conecta()){
			$sQuery = "SELECT * FROM Usuario WHERE sContrasenia = '".$this->sPassword."' AND sEmail = '".$this->sEmail."'";
			$oDatos = $oConexion->ejecutaConsulta($sQuery);
			if($oDatos){
				$this->nClave = $oDatos[0][0];
				$this->sPassword = $oDatos[0][1];
				$this->sNombre = $oDatos[0][2];
				$this->sApaterno = $oDatos[0][3];
				$this->sAmaterno = $oDatos[0][4];
				$this->nTelefono = $oDatos[0][5];
				$this->sDireccion = $oDatos[0][6];
				$this->sEmail = $oDatos[0][7];
				$this->sTipo = "comprador";
				$oSearch = true;
			}else{
			   $sQuery = "SELECT * FROM Administrador WHERE sContrasenia = '".$this->sPassword."' AND sEmail = '".$this->sEmail."'";
			   $oDatos = $oConexion->ejecutaConsulta($sQuery);
			   if($oDatos){
			   	$this->nClave = $oDatos[0][0];
				$this->sPassword = $oDatos[0][1];
				$this->sNombre = $oDatos[0][2];
				$this->sApaterno = $oDatos[0][3];
				$this->sAmaterno = $oDatos[0][4];
				$this->sEmail = $oDatos[0][5];
				$this->sTipo = "admin";
			   	$oSearch = true;
			   }else{
			   	$oSearch =false;
			   }
			}
		}else
			$oSearch =false;
		return $oSearch;
	}
}
?>