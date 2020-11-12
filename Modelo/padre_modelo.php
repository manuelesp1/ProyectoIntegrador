<?php 

class Padre_modelo{
	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function agregar_padre($nombre, $apepat, $apemat, $correo, $contraseña, $tipo){
		$this->db->query("INSERT into padre (nombres, ap_materno, ap_paterno, correo, contraseña, tipo) values ('$nombre', '$apepat', '$apemat', '$correo', '$contraseña', '$tipo')");//proceso almacenado
	}
}

?>