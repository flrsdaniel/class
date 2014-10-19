<?php
//////Super class Persona, solo contiene los campos obligatorios de una persona//////
class classPesonas
{
	//DECLARACION DE VARIABLES INTERNAS DE LA CLASS
	private $fechoy;
	private $dia;
	private $mes;
	private $ano;
	private $nombre;	
	private $apellido;	
	private $cedula;	
	private $telefono;	
	private $email;	
	private $direccion;
	private $sexo;	
	private $fecnacper;	
	private $staciv;	
	private $edad, $edad1;

	///METODO CONSTRUCTOR DE LA CLASS
	public function __construct($n, $a, $c, $t, $em, $dir, $sx, $fn, $sc){
		$this->nombre = $n;
		$this->apellido = $a;
		$this->cedula = $c;
		$this->telefono = $t;
		$this->email = $em;
		$this->direccion = $dir;
		$this->sexo = $sx;
		$this->fecnacper = $fn;
		$this->staciv =	$sc;
		$this->fechoy = date('Y-m-d');
		$this->dia = date('d');
		$this->mes = date('m');
		$this->ano = date('Y');
		$this->edad = 0;
	}
	//LOS RESPECTIVOS SET... Y GET... DE CADA VARIABLE.
	public function setNombre($n){
		$this->nombre = $n;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($ap){
		$this->apellido = $apn;
	}
	public function getApellido(){
		return $this->apellido;
	}
		public function setCedula($cd){
		$this->cedula = $cd;
	}
	public function getCedula(){
		return $this->cedula;
	}
	public function setTelefono($tf){
		$this->telefono = $tf;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function setEmail($em){
		$this->email = $em;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setDireccion($dir){
		$this->direccion = $dir;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function setSexo($sx){
		$this->sexo = $sx;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function setFecnacper($fn){
		$this->fecnacper = $fn;
	}
	public function getFecnacper(){
		return $this->fecnacper;
	}
	public function setStaciv($sc){
		$this->staciv = $sc;
	}
	public function getStaciv(){
		return $this->staciv;
	}
	// METODOS ADICIONALES
	public function calculoEdad(){
		if($this->fecnacper < $this->fechoy){
			$this->edad = $this->fechoy-$this->fecnacper;
		}
		return $this->edad;				
	}
	public function nombreApellido(){
		return $this->nombre." ".$this->apellido;
	}
}
?>