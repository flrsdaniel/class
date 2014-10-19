<?php

/// SUB CLASS classUsuarios QUE EXTIENDE DE LA SUPER CLASS classPersonas
include ("class_personas.php");
class classUsuarios extends classPesonas
{
	///DECLARACION DE VARIABLES
	private $login;
	private $clave;
	private $tipo;
	private $foto;
	private $feculting;
	private $obser;
	private $stausu;
	///// METODOS CONSTRUCTORES
	public function __construct($n, $a, $c, $t, $em, $dir, $sx, $fn, $sc, $lg, $pw, $tp, $ft, $fu, $ob, $st){
		$this->login = $lg;
		$this->clave = $pw;
		$this->tipo = $tp;
		$this->foto = $ft;
		$this->feculting = $fu;
		$this->obser = $ob;
		$this->stausu = $st;
		parent::__construct($n, $a, $c, $t, $em, $dir, $sx, $fn, $sc);
	}
	//////// METODOS SET.. Y GET... DE CADA VARIABLE
	public function setLogin($lg){
		$this->login = $lg;
	}
	public function getLogin(){
		return $this->login;
	}
	public function setClave($pw){
		$this->clave = $pw;
	}
	public function getClave(){
		return $this->clave;
	}
	public function setTipo($tp){
		$this->tipo = $tp;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setFoto($ft){
		$this->foto = $ft;
	}
	public function getFoto(){
		return $this->foto;
	}
	public function setFeculting($fu){
		$this->feculting = $fu;
	}
	public function getFeculting(){
		return $this->feculting;
	}
	public function setObser($ob){
		$this->obser = $ob;
	}
	public function gtObser(){
		return $this->obser;
	}
	public function setStausu($st){
		$this->stausu = $st;
	}
	public function getStausu(){
		return $this->stausu;
	}
	/// METODOS ADICIONALES
}

?>