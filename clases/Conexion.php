<?php 
class Conexion extends mysqli{
	private $cad=array('localhost','practica','1234','practica');

	public function __construct(){
		parent::__construct($this->cad[0],$this->cad[1],$this->cad[2],$this->cad[3]);
		if(mysqli_connect_error()){
			die("error al realizar la conexion(".mysqli_connect_errno().") ".mysqli_connect_error());	
		}
	}
}


 ?>