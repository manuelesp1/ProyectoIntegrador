<?php 

class Personal_modelo{

	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function mostrar_personal(){
		$query = $this->db->query("SELECT * FROM padre");//proceso almacenado
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
	
	public function nuevo_personal($nombre, $apepat, $apemat, $correo, $contraseña, $tipo){
		$this->db->query("INSERT into padre (nombres, ap_materno, ap_paterno, correo, contraseña, tipo) values ('$nombre', '$apemat', '$apepat', '$correo', '$contraseña', '$tipo')");
	}

	public function cambio_rol($id_padre, $nuevo_rol){
		$this->db->query("UPDATE padre set tipo = '$nuevo_rol' where id_padre = '$id_padre'");
	}
}

?>
