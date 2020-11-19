<?php 

class Padre_modelo{
	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function agregar_padre($dni, $nombre, $apepat, $apemat, $telef, $direccion, $correo, $contraseña, $rol){
		$this->db->query("CALL agregar_padre1('$correo', '$contraseña', '$rol')");
		$this->db->query("CALL agregar_padre2('$nombre', '$apemat', '$apepat', '$telef', '$direccion', '$dni', (SELECT max(id_usuario) from usuario))");
		//$this->db->query("INSERT INTO usuario (correo, contraseña, id_rol) values ('$correo', '$contraseña', '$rol')");
		//$this->db->query("INSERT into padre (nombres, apellidoM, apellidoP, telefono, direccion, dni, id_usuario) values ('$nombre', '$apemat', '$apepat', '$telef', '$direccion', '$dni', (SELECT max(id_usuario) from usuario))");
	}

	public function editar_padre($dni, $nombre, $apepat, $apemat, $telef, $direccion, $correo, $contraseña, $id_padre){
		$this->db->query("CALL editar_padre1('$correo', '$contraseña', '$id_padre')");
		$this->db->query("CALL editar_padre2('$nombre', '$apemat', '$apepat', '$telef', '$direccion', '$dni', '$id_padre')");
		//$this->db->query("UPDATE usuario t1 inner join padre t2 on t1.id_usuario = t2.id_usuario set correo = '$correo', contraseña = '$contraseña' where t2.id_padre = '$id_padre'");
		//$this->db->query("UPDATE padre set nombres = '$nombre', apellidoM = '$apemat', apellidoP = '$apepat', telefono = '$telef', direccion = '$direccion', dni = '$dni' where id_padre = $id_padre");
	}

	public function mostrar_padre($id_usuario){
		$query = $this->db->query("SELECT t1.id_padre, t1.nombres, t1.apellidoP from padre t1 inner join usuario t2 on t1.id_usuario = t2.id_usuario where t2.id_usuario = '$id_usuario'");
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
}

?>