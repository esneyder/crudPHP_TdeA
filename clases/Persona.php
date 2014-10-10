<?php 
require_once'Conexion.php';
class Persona{

	private $nombre;
	private $apellido;
	private $cedula;
	private $correo;
	private $sexo;
	private $con;

	public function __construct(){
	
	}

	public function crearTabla(){
		$this->con=new Conexion();
		$mensaje="se creo exitosamente la tabla";
		$sql="create table if not exists persona(nombre varchar(30),
										apellido varchar(30),
										cedula varchar(30),
										sexo bit,
										correo varchar(30) unique,
										primary key(cedula)
										)";
		
		$crear=$this->con->query($sql);
		if($crear){
			return $mensaje;
		}

		return "error al crear la tabla";


	}



}



 ?>