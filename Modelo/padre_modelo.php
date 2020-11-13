<?php 

class Padre_modelo{
	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function agregar_padre($dni, $nombre, $apepat, $apemat, $telef, $direccion, $correo, $contraseña, $rol){
		$this->db->query("INSERT INTO usuario (correo, contraseña) values ('$correo', '$contraseña')");
		$this->db->query("INSERT into padre (nombres, apellidoM, apellidoP, telefono, direccion, dni, id_usuario, id_rol) values ('$nombre', '$apemat', '$apepat', '$telef', '$direccion', '$dni', (SELECT max(id_usuario) from usuario), '$rol')");
	}
}

?>